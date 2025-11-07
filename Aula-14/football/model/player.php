<?php
class Player
{
    private string $name;
    private string $position;
    private DateTime $birthdate;

    public function __construct(string $name, string $position, DateTime $birthdate)
    {
        $this->name = $name;
        $this->position = $position;
        $this->birthdate = $birthdate;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_position()
    {
        return $this->position;
    }

    public function get_birthdate()
    {
        return $this->birthdate;
    }
}
