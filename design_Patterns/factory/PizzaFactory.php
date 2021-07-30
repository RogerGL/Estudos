<?php

require_once "./ComidaFactory.php";


class PizzaFactory implements ComidaFactory
{
    public function criarComida($id){
    if($id == 0) {
        //PIZZA CALABRESA
        $p = new Pizza();
        $p->nome = "Pizza de Calabresa";
        $p->sabor1 = "Calabresa";
        $p->sabor2 = "Queijo";
        $p->comPalmito = false;
        $p->bodaComRecheio = false;
        return $p;

    }else if($id == 1)
    {
        $p = new Pizza();
        $p->nome = "Pizza de Frango";
        $p->sabor1 = "Frango";
        $p->sabor2 = "Catupiry";
        $p->comPalmito = false;
        $p->bodaComRecheio = true;
        return $p;
    }
    else
    {
        $p = new Pizza();
        $p->nome = "Pizza Mista";
        $p->sabor1 = "Presunto";
        $p->sabor2 = "Queijo";
        $p->comPalmito = false;
        $p->bodaComRecheio = true;
        return $p;
    }
}
}