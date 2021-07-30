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

/* 
    OPERADORES LÓGICOS

    Possivel juntar duas condições ou mais.

&& (E): Só sera verdade, caso todos os valores forem verdadeiros
|| (OU): Só sera verdade, quando apenas um dos valores forem verdadeiros, falso quando os dois são
! (NÂO): Inverte o valor da condição, quando for V, vai ser F, quando F, vai ser V

*/

$valorA = 10;
$valorB = 8;
$valorC = $valorA == $valorB;
/*
if ($valorA != $valorB) {
    echo "Valor (A) é diferente ao Valor (B)";
} else{
    echo "Valor (A) é Igual ao Valor (B)";
     
};

*/

if ($valorA >= $valorB) {
    echo "A é maior que B";
} else{
    echo "A é menor do que B";
};