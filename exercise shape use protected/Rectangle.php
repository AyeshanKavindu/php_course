<?php
class Rectangle
{
    public function __construct(
        protected float $length,
        protected float $width,
        protected string $color
    ) {}

     public function getLength(): float
    {
        return $this->length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getColor(): string
    {
        return $this->color;
    }

     public function setWidth(float $width): void
        {
            $this->width = $width;
        }
        
    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }
}
