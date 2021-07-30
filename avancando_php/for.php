<?php
//COM O FOR CONSIGO PERCORRER O ARRAY
//for tem 3 partes

//$numero = 8
/*
for ($i=0; $i <=10 ; $i++) { 
    echo $i . "<br>";
}



for ($i=0; $i <= 10 ; $i++) { 

    echo $i . " X " . $numero . " = " . $i * $numero . "<br>";

}*/

$frutas = [
    "Banana",
    "Maçã",
    "Melão",
    "Melancia"
];

for ($i=0; $i < count($frutas) ; $i++) { 
    echo  $frutas[$i] . "<br>"; 
}
