<?php
require_once 'model/calculator.php';

$calculator = new Calculator(5, 3);

echo $calculator->sum() . '<br>';
echo $calculator->sub() . '<br>';
echo $calculator->mult() . '<br>';
echo $calculator->div() . '<br>';
