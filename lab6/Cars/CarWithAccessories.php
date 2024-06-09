<?php
include_once 'NewCar.php';
    class CarWithAccessories extends NewCar {
        private $alarm = 0.0;
        private $radio = 0.0;
        private $airConditioning =  0.0;

        public function PricePLN(): float{
            return parent::PricePLN() + $this->alarm + $this->radio + $this->airConditioning;
        }

    }