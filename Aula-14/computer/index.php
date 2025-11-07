<?php
require_once 'model/computer.php';

$computer = new Computer();

echo "Status: " . $computer->status() . "<br>";

if ($computer->power_on()) {
    echo "Computer turned on.<br>";
} else {
    echo "Computer could not be turned on.<br>";
}

echo "Status: " . $computer->status() . "<br>";

if ($computer->power_off()) {
    echo "Computer turned off.<br>";
} else {
    echo "Computer could not be turned off.<br>";
}

echo "Status: " . $computer->status() . "<br>";
