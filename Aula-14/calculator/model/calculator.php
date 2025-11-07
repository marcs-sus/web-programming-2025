<?php
class Calculator
{
    private float $number1;
    private float $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function sum(): float
    {
        return $this->number1 + $this->number2;
    }

    public function sub()
    {
        return $this->number1 - $this->number2;
    }

    public function mult()
    {
        return $this->number1 * $this->number2;
    }

    public function div()
    {
        return $this->number1 / $this->number2;
    }
}
