<?php

namespace Hackathon\LevelC;

class RotationString
{
    /**
     * @TODO ! BAM
     *
     * @param $s1
     * @param $s2
     *
     * @return bool|int
     */
    public static function isRotation($s1, $s2)
    {
        $lenS1 = strlen($s1);
        $lenS2 = strlen($s2);

        if ($lenS1 === $lenS2 && $lenS1 > 0) {
            return self::isSubString($s1.$s1, $s2);
        }

        return false;
    }

    public static function isSubString($s1, $s2)
    {
        $pos = strpos($s1, $s2);

        return $pos;
    }
}
