<?php
class Player
{
    private string $name;
    private string $position;
    private DateTime $birthDate;

    public function __construct($name, $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }
}
