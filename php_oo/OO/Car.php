<?php

require_once("Vehicle.php");
// classe filha pegando os atributos da classe mãe, funcionando a herança
class Car extends Vehicle
{ 
    private $doors;

    public function setDoors($doors)
    {
        $this->doors = $doors;
    }
    public function getDoors()
    {
        return $this->doors;
    }
    public function getBrand()
    {
        return $this->brand;
    }
}

