<?php
namespace App;

class Numbers
{
    public $no1;
    public $no2;

    public function add($a, $b)
    {
        return $a+$b;
    }

    public function sub($a, $b)
    {
        return $a-$b;
    }

    public function mul($a, $b)
    {
        return $a*$b;
    }

    public function div($a, $b)
    {
        if($b==0){
            return new \Exception('Uncaught Exception');
        }
        return $a/$b;
    }
}