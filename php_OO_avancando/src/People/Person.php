<?php

    //namespace serve para autoload, deixar ela unica
    namespace RogerZarpo\People;

    

class Person
{
   use \RogerZarpo\GetterSetter;
    
    private $name;
    private $age;
    private $weight;

    public function __construct()
    {
        echo 'Classe Instanciada' . PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name= $name;
      
        }
        
        public function setAge(int $age)
        {
            $this->age = $age;
          
            }
        public function setWeight(float $weight)
    {
        $this->weight = $weight;
  
    }

        public function getName()
        {
            return ucfirst($this->name);
        }

    public function __toString() :string
    {
        return ucfirst($this->name) . "," . $this->age . "," . $this->weight . ".";
    }
    
}