<?php
class Contact
{
    private string $name;
    private string $value;
    private int $type;

    public function __construct(string $name, string $value, int $type)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }

    public function toJson()
    {
        return json_encode(get_object_vars($this));
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }
}
