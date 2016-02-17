<?php

namespace Hackathon\LevelC\Tests;

use Hackathon\LevelC\RotationString;

class LevelTreeTest extends \PHPUnit_Framework_TestCase
{
    public function testA()
    {
        $res = RotationString::isRotation('waterbottle', 'erbottlewat');

        $this->assertEquals(true, $res);
    }

    public function testB()
    {
        $res = RotationString::isRotation('apple', 'pleap');

        $this->assertEquals(true, $res);
    }

    public function testC()
    {
        $res = RotationString::isRotation('apple', 'ppale');

        $this->assertEquals(false, $res);
    }
    public function testD()
    {
        $res = RotationString::isRotation('coucoucou', 'cou');

        $this->assertEquals(false, $res);
    }
}
