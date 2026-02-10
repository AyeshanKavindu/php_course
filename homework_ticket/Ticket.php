<?php
class Ticket{
    public string $quantity;
    public float $unitPrice;

    public function getquantity($name)
    {
        return $this->quantity;                
    }
    public function getUnitPrice($name)
    {
        return $this->unitPrice;                
    }
    public function setquantity($quantity): void
    {
        $this->quantity = $quantity;
    }
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }


    public function getTotalPrice():float{
        return $this->quantity * $this->unitPrice;
    }
}

?>