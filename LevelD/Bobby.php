<?php

namespace Hackathon\LevelD;

class Bobby
{
    public $wallet = array();
    public $total;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
        $this->computeTotal();
    }

    /**
     * @TODO
     *
     * @param $price
     *
     * @return bool|int|string
     */
    public function giveMoney($price)
    {
        arsort($this->wallet, SORT_NUMERIC);
        $elementToDelete = array();
        $toGive = 0;

        foreach ($this->wallet as $k => $element) {
            if (is_numeric($element)) {
                $elementToDelete[] = $k;
                $toGive += $element;
            }

            if ($toGive >= $price) {
                foreach ($elementToDelete as $del) {
                    unset($this->wallet[$del]);
                }
                $this->computeTotal();

                return true;
            }
        }

        $this->computeTotal();

        return false;
    }

    /**
     * This function updates the amount of your wallet
     */
    private function computeTotal()
    {
        $this->total = 0;

        foreach ($this->wallet as $element) {
            if (is_numeric($element)) {
                $this->total += $element;
            }
        }
    }
}
