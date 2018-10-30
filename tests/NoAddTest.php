<?php
namespace Unit\Test;

use PHPUnit\Framework\TestCase;
use App\Numbers;

class NoAddTest extends TestCase
{
    public function testAdd()
    {
        $num = new Numbers();
        $result = $num->add(5,2);
        $this->assertEquals(7, $result);
    }


}