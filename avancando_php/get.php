<?php

//GET é uma variavel global que pega valores da URL e deixa explicito.

//ex de query string = ?planeta=Marte&cor=Vermelho  get pega direto da url

/*
echo $_GET['planeta'];
echo '<br>';
echo $_GET['cor'];
*/

//isset serve para ver se a variavel foi definida
$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if ($planeta != false) {
    echo $planeta;
} else {
    echo 'Planeta não informado!';
};
/*
echo '<br>';

//coalesce
$cor = $_GET['cor'] ?? 'Cor não informada!';

echo $cor;
*/