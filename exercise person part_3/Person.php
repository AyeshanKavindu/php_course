<?php
class Person
{
    public function __construct(
        protected string $firstName,
        protected string $lastName,
        protected int $age
    ) {}

   public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getAge(): int
    {
        return $this->age;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }   

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
?>