<?php

abstract class Shape
{
    protected static int $count = 0;
    
    public function __construct(protected string $color)
    {
        self::$count++;
    }

     public function getColor(): string
    {
        return $this->color;
    }

    public abstract function calculateArea():float;

    public static function getCount(): int
    {
        return self::$count;
    }


}