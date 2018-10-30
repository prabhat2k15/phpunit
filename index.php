<?php
include_once 'vendor/autoload.php';
use App\Numbers;

$num = new Numbers;

$result = $num->add(5,2);
$result = $num->sub(5,2);
$result = $num->mul(5,2);
$result = $num->div(0,0);

echo $result;

