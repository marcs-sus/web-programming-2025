<?php
$value = $_REQUEST['value'];
$discount = $_REQUEST['discount'];

function calcDiscount($value, $discount)
{
    $valueToDiscount = $value * ($discount / 100);
    $valueDiscounted = $value - $valueToDiscount;
    return $valueDiscounted;
}

echo "<h2>O valor com o desconto é: " . calcDiscount($value, $discount) . "</h2>";
