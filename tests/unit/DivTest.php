<?php
namespace Unit\Test;

use PHPUnit\Framework\TestCase;
use App\Numbers;

class DivTest extends TestCase
{
    /**
     * @dataProvider provider
      */
    function testDiv($no1, $no2, $expected)
    {
        $num = new Numbers();
        $result = $num->div($no1, $no2);
        $this->assertEquals($expected, $result);
    }
    public function testDivForException()
    {
        $num = new Numbers();
        $result = $num->div(0, 0);
        $this->assertInstanceOf(\Exception::class, $result);
    }

    public function provider()
    {
        return array(
            // 'case 1'=>array(0, 0, 0),
            'case 2'=>array(-1, -1, 1),
            'case 3'=>array(0, -1, 0),
        );
    }
}