<?php
class Computer
{
    private const STATE_ON = 'ON';
    private const STATE_OFF = 'OFF';

    private string $state;

    public function __construct()
    {
        $this->init();
    }

    public function power_on()
    {
        if ($this->state == self::STATE_ON) {
            return false;
        }

        $this->state = self::STATE_ON;
        return true;
    }

    public function power_off()
    {
        if ($this->state == self::STATE_OFF) {
            return false;
        }

        $this->state = self::STATE_OFF;
        return true;
    }

    public function status()
    {
        return $this->state;
    }

    private function init()
    {
        $this->state = self::STATE_OFF;
    }
}
