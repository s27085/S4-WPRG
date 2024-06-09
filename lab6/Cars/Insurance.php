<?php

class Insurance extends CarWithAccessories{
    private $yearsOwned = 0;
    private $valuePercentage = 0.0;

    public function PricePLN(): float
    {
        return $this->valuePercentage * (parent::PricePLN() * ((100-$this->yearsOwned)/100));
    }
}
