<?php

require_once("Vehicle.php");
class Motorcycle extends Vehicle
{ 
    public function __construct($brand = null, $color = null)
    {
        //pode chamar metodos da classe mãe, no filho.
        parent::__construct($brand,strtoupper( $color));
    }
    public function getBrand()
    {
        return $this->brand;
    }
}