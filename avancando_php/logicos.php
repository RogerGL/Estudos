<?php
/* 
    OPERADORES LÓGICOS

    Possivel juntar duas condições ou mais.

&& (E): Só sera verdade, caso todos os valores forem verdadeiros
|| (OU): Só sera verdade, quando apenas um dos valores forem verdadeiros, falso quando os dois são F
! (NÂO): Inverte o valor da condição, quando for V, vai ser F, quando F, vai ser V

*/

$media = 7;
$frequencia = 75;

$mediaAluno = 8;
$frequenciaAluno = 50;

$chovendo = true;

if (!$chovendo) {
    echo "Vou ficar em casa";
}else{
    echo "Vou para piscina";
}



/*
if ($mediaAluno >= $media || $frequenciaAluno >= $frequencia) {
    echo "Aprovado";
}else {
    echo "Reprovado";
}
*/



/*if ($mediaAluno >= $media && $frequenciaAluno >= $frequencia) {
    echo "Aprovado";
} elseif ($mediaAluno <= $media || $frequenciaAluno <= $frequencia){
    echo "Recuperação";
} else {
    echo "Reprovado";
}*/
