<?php
class Product{
    
    public function __construct(
         public string $name,
         public float $price,
         public float $vat,
    )
    {
    }

    public function getPriceWithTax():float{
        return $this->price + ($this->price * $this->vat);
    }
}

?>

