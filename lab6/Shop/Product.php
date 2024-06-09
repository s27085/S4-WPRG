<?php

class Product
{
    private $name = "";
    private $price = 0.0;
    private $quantity = 0;

    function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function __set($property, $value){
        if ($property === 'name') {
            $this->name = $value;
        }
        if ($property === 'price') {
            $this->price = $value;
        }
        if ($property === 'quantity') {
            $this->quantity = $value;
        }
    }
    public function __get($property){
        if ($property === 'name') {
            return $this->name;
        }
        if ($property === 'price') {
            return $this->price;
        }
        if ($property === 'quantity') {
            return $this->quantity;
        }
    }
    function PricePLN(): float{
        return $this->price * $this->quantity;
    }

    function __toString(){
        return "Product: ".$this->name." Price: ".$this->price." Quantity: ".$this->quantity;
    }

}
