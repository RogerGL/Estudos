<?php
/*
    OPERADORES DE COMPARAÇÂO
    
> (maior): Retorna verdadeiro caso o primeiro valor seja maior que o segundo.
>= (maior ou igual): Retorna verdadeiro caso o primeiro valor seja maior ou igual ao segundo.
< (menor): Retorna verdadeiro caso o primeiro valor seja menor que o segundo.
<= (menor ou igual): Retorna verdadeiro caso o primeiro valor seja menor ou igual ao segundo
== (igual a): Retorna verdadeiro caso o primeiro valor seja igual ao segundo.
!= (diferente de): Retorna verdadeiro caso o primeiro valor seja diferente do segundo.


*/ 


$valorA = 10;
$valorB = 8;
$valorC = $valorA == $valorB;

if ($valorA == $valorB) {
    echo "Valor (A) é Igual ao Valor (B)";
} else{

     echo "Valor (A) NÂO é Igual ao Valor (B)";
};