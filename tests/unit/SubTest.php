<?php
namespace Unit\Test;

use PHPUnit\Framework\TestCase;
use App\Numbers;

class SubTest extends TestCase
{
    /**
     * @dataProvider provider
      */
    function testSub($no1, $no2, $expected)
    {
        $num = new Numbers();
        $result = $num->sub($no1, $no2);
        $this->assertEquals($expected, $result);
    }

    public function provider()
    {
        return array(
            'case 1'=>array(0, 0, 0),
            'case 2'=>array(-1, -1, 0),
            'case 3'=>array(0, -1, 1),
        );
    }
}