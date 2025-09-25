<?php
$salary1 = 1000;
$salary2 = 2000;

$salary2 = $salary1;

$salary2++;

$salary1 *= 1.1;

for ($i = 0; $i < 100; $i++) {
    $salary1++;

    if ($i == 50) {
        break;
    }
}

if ($salary1 > $salary2) {
    echo "<h1>Salary 1 is greater than Salary 2</h1>";
} else if ($salary1 < $salary2) {
    echo "<h1>Salary 1 is less than Salary 2</h1>";
} else {
    echo "<h1>Salary 1 is equal to Salary 2</h1>";
}

echo "<h1>Salary 1: $salary1</h1>";
echo "<h1>Salary 2: $salary2</h1>";
