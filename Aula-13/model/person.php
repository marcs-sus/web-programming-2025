<?php
require_once 'contact.php';

class Person
{
    private string $firstName;
    private string $surName;
    private DateTime $birthDate;
    private string $id;
    private int $type = 0;
    private array $contacts;
    private string $address;

    public function __construct(
        $firstName,
        $surName,
        $birthDate,
        $id,
        $type,
        $contact,
        $address
    ) {
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->birthDate = $birthDate;
        $this->id = $id;
        $this->type = $type;
        $this->contacts = $contact;
        $this->address = $address;
    }

    public function addContact($contact): void
    {
        array_push($this->contacts, $contact);
    }

    public function getCompleteName(): string
    {
        return $this->firstName . ' ' . $this->surName;
    }

    public function toJson()
    {
        return json_encode(get_object_vars($this));
    }

    public function getAge(): int
    {
        return $this->birthDate->diff(new DateTime())->y;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getSurName(): string
    {
        return $this->surName;
    }

    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getContact(): array
    {
        return $this->contacts;
    }
}
