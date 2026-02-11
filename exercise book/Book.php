<?php

class Book{
    public string $title;
    public float $price;
    public float $vat;

    public function __construct($title, $price, $vat)
    {
        $this->title = $title;
        $this->price = $price;
        $this->vat = $vat;
    }

    public function getTitle(): string
    {
        return $this->title;                
    }
    public function getPrice(): float
    {
        return $this->price;                
    }
    public function getVat(): float
    {
        return $this->vat;                
    }
    
    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    public function setVat($vat): void
    {
        $this->vat = $vat;
    }

    public function getTotalWithVat():float{
        return $this->price + ($this->price * ($this->vat / 100));
    }
}

?>