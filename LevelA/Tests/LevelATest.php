<?php

namespace Hackathon\LevelA\Tests;

use Hackathon\LevelA\Palindrome;

class LevelATest extends \PHPUnit_Framework_TestCase
{
    public function testA()
    {
        $palo = new Palindrome('abc');

        $this->assertEquals('abccba', $palo->generatePalindrome());
    }

    public function testB()
    {
        $palo = new Palindrome('noel');

        $this->assertEquals('noelleon', $palo->generatePalindrome());
    }

    public function testC()
    {
        $palo = new Palindrome('lö');

        $this->assertEquals('lööl', $palo->generatePalindrome());
    }
}
