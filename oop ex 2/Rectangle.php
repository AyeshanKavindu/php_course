<?php
class Rectangle
{
    public function __construct(
        public float $length,
        public float $width,
        public string $color
    ) {}

    public function calculateArea(): float
    {
        return $this->length * $this->width * 0.5;
    }
}
