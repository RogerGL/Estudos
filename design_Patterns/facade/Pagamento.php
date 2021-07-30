<?php

class Pagamento
{
    public static function pagarComCartao($valor)
    {
        echo "Pago Com o Cartão!";
    }
    public static function pagarComBoleto($valor)
    {
        echo "Pago Com o Boleto!";
    }

}