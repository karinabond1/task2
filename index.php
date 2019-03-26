<?php
include 'config.php';
include 'libs/Calc.php';


$obg = new Calc();
$first = 9;
$second = 4;

$obg->setFirst($first);
$obg->setSecond($second);
echo 'fist = '.$obg->getFirst().'<br>';
echo 'second = '.$obg->getSecond().'<br>';
echo 'Plus = '.$obg->plus().'<br>';
echo 'Minus = '.$obg->minus().'<br>';
echo 'Mult = '.$obg->mult().'<br>';
echo 'Dev = '.$obg->dev().'<br>';
echo 'Persent = '.$obg->persent().'<br>';
echo 'Rad = '.$obg->rad().'<br>';
echo 'One dev = '.$obg->one_dev().'<br>';
?>
