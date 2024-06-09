<?php

class Cart {
    private $products = array();

    public function __construct(){
        $this->products = array();
    }

    public function AddProduct(Product $product){
        array_push($this->products, $product);
    }
    public function removeProduct(Product $product){
        $key = array_search($product, $this->products);
        if($key !== false){
            unset($this->products[$key]);
        }
    }
    public function GetTotal(): float{
        $total = 0.0;
        foreach($this->products as $product){
            $total += $product->PricePLN();
        }
        return $total;
    }
    public function __toString(){
        $result = "Cart: \n";
        foreach($this->products as $product){
            $result .= $product->__toString()."\n";
        }
        $result .= "Total: ".$this->GetTotal();
        return $result;
    }


}
