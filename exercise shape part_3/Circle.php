<?php
class Circle extends Shape
{
    public function __construct(
        protected float $radius,
        string $color
    ) {
        parent::__construct($color);
    }

     public function getRadius(): float
    {
        return $this->radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

     public function setRadius(float $radius): void
        {
            $this->radius = $radius;
        }

    public function calculateArea(): float
    {
        //return pi() * pow($this->radius, 2);
        return pi() * ($this->radius ** 2);
    }
}