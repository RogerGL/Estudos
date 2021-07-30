<?php
//paradigma funcional

$input = array (
    22,
    34,
    17,
    18,
    14,
    13,
    22,
    25
);

$filtro = function(int $age){
    return($age >= 18);
};

$output = array_filter($input, $filtro);

//tras os detalhes do array
print_r($output);