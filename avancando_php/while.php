<?php
/*
$contador = 0;

while ($contador <= 10) {
    


$contador = $contador + 1;

    if ($contador % 2 !=0) {
        continue; //continuar, ignorando a partir
    }

echo $contador . "<br>";

    if ($contador == 7) {
        break;
    }
};
*/


$numero = 6;
$contador = 1;

while ($contador<=10) {
    echo $contador . " X " . $numero . " = " . $contador * $numero . "<br>";
    $contador++;
}