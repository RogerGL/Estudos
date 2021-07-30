<?php

// PHP analisa o que escrevemos da Esquerda ----> Direita

$soma = 5 + 3 * 8;
// vai somar primeiro a multiplicação por regra de operador.
// em seguida ele volta a analisar da esquerda pra direita.
// ficando 5 + 24 = 29


// PHP analisa o que escrevemos da Esquerda ----> Direita
$string = "School of Net" . "Iniciando com PHP";


// Parenteses se torna prioridade e vai somando apartir da parenteses.
$soma2 = ( 5 + 3 * 8) * 8;