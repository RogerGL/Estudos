<?php
require_once("IVehicle.php");

//classe pai --- Principal, a classe carro vai herdar da classe pai
abstract class Vehicle implements IVehicle
{
     //protected proteje a variavel dentro da classe, quase como private, mas libera para classe filho
    public $brand;
    protected $color;
    public $engine;
     
    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    public function getEngine($type = "HorsePower")
    {
        return "{$this->engine}  {$type}";
        
        }
    

    abstract public function getBrand();
    public function getColor()
    {
        return $this->color;
        
        }
    
    
    
}
 //classe abstrata é como um template, um molde para fazer outras classes, não pode ser instanciada com new (objeto)
// mas pode dar um extends puxando os metodos e atributos
