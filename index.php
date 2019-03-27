<?php
include 'config.php';
include 'libs/Calc.php';


$obj = new Calc();
$first = 9;
$second = 4;


$obj->setFirst($first);
$obj->setSecond($second);
echo 'fist = ' . $obj->getFirst() . '<br>';
echo 'second = ' . $obj->getSecond() . '<br>';
echo 'Plus = ' . $obj->plus() . '<br>';
echo 'Minus = ' . $obj->minus() . '<br>';
echo 'Mult = ' . $obj->mult() . '<br>';
if ($obj->getSecond() == 0) {
    echo DEV_NULL;
} else {
    echo 'Dev = ' . $obj->dev() . '<br>';
    echo 'One dev = ' . $obj->one_dev() . '<br>';
    echo 'Persent = ' . $obj->persent() . '<br>';
}

echo 'Rad = ' . $obj->rad() . '<br>';


$obj->add(7);
$obj->show();//7
$obj->pick(2);
$obj->show();//5
$obj->add(5);
$obj->show();//10
$obj->pick(3);
$obj->show();//7
$obj->del();
$obj->show();
?>
