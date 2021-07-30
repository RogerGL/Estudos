<?php

//FOREACH é uma estrutura de loop para percorrer facilmente arrays
//FOREACH = Para cada, ou seja para cada item, no array Planeta, seja igual a um planeta.

$planetas = [
    'Mercúrio',
    'Vênus',
    'Terra',
    'Marte',
    'Júpiter',
    'Saturno',
    'Urano',
    'Netuno',
    'Plutão'
];

foreach ($planetas as $planetas) {
    echo $planetas . '<br>';
};

