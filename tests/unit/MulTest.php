<?php
namespace Unit\Test;

use PHPUnit\Framework\TestCase;
use App\Numbers;

class MulTest extends TestCase
{
    /**
     * @dataProvider provider
      */
    function testMul($no1, $no2, $expected)
    {
        $num = new Numbers();
        $result = $num->mul($no1, $no2);
        $this->assertEquals($expected, $result);
    }

    public function provider()
    {
        return array(
            'case 1'=>array(0, 0, 0),
            'case 2'=>array(-1, -1, 1),
            'case 3'=>array(0, -1, 0),
        );
    }
}