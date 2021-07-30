<?php

//orientação a objetos
//metodo e como uma função, só que dentro de uma classe
class People
{
    public function getHello($name){
        return "Hello $name!";
    }
}

//obejto

$p = new People;

echo $p->getHello("Roger");

