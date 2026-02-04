<?php

abstract class Shape
{
    
    public function __construct(protected string $color)
    {
    }

     public function getColor(): string
    {
        return $this->color;
    }

    public abstract function calculateArea():float;

}