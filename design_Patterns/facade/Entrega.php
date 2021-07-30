<?php

class Entrega
{
    public $endereço;
    public $cep;
    public $transportadora;

    public function calcularFrete(){
        return 200;
    }
}