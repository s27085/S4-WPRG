<?php
    class NewCar {
        private $model = "";
        private $price = 0.0;
        private static $EUROrate = 4.5;
        function __construct($model, $price){
            $this->model = $model;
            $this->price = $price;
        }
        function PricePLN(): float{
            return $this->price * self::$EUROrate;
        }

    }