<?php
class Employee extends Person
{
    public function __construct(
        string $firstName,
        string $lastName,
        int $age,
        protected string $company,
        protected string $position
    ) {
        parent::__construct($firstName, $lastName, $age);
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setCompany(string $company): void
    {
        $this->company = $company;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
    public function getFullName(): string
    {
        return $this->firstName. ' ' . $this->lastName . ' ' . $this->position;
    }

  
    }
?>
