<?php

// Consegue juntar uma cadeia de caracteres com a concatenação  que é definida por ponto final
// ex: echo $nome . $sobrenome;
// Funciona com armazenamento em variavel a concatenação
// "\n" é quebra de linha.


$string1 = "School of Net";
$string2 = "Iniciando com PHP";

echo $string1 . " ". "Estamos" .' ' . $string2;

echo "\n";

$string3 = $string1 ." ". $string2;

echo  $string3;

echo "\n";

$string4 = "$string1 $string2";

echo $string4;