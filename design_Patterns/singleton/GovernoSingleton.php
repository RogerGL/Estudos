<?php

//ESTRUTURA BASICA DE UM SINGLETON

//classe global unica
class GovernoSingleton

{
    //Campos
    public $nomeDoPais = 'Brasil';
    public $proximaEleicao = '2022';

    public function realizarEleicao()
    {
        echo "Realizando .... <br>";
    }





    //atributo que vai guardar a unica instancia
    private static $instancia = null;
    //proibi a criacção de instancias em outra classe
    private function __contruct()
    {
        
    }
    private function __clone(){}
    public static function pegarInstancia()
    {
        if (self::$instancia==null) {
            self::$instancia = new GovernoSingleton();
        }
        return self::$instancia;
    }
}