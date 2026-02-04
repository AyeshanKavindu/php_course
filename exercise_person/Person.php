<?php
class Person
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public int $age
    ) {}

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
?>