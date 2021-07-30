<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];

echo "<strong>Nome:</strong>" . $nome . "<br>";
echo "<strong>E-mail:</strong>" . $email . "<br>";

echo "<strong>Interesses:</strong><br>" ;
echo "<ul>";
foreach ($interesses as $interesse) {
    echo "<li>$interesse</li>";
}

echo "</ul>";

echo "<strong>Onde Conheceu:</strong>" . $onde_conheceu . "<br>";
echo "<strong>Redirecionar:</strong>" . $redirecionar . "<br>";

//var_dump($_POST);

/*
var_dump($_POST['name']);
var_dump($_POST['email']);
var_dump($_POST['interesse']);
var_dump($_POST['onde_conheceu']);
var_dump($_POST['mensagem']);
var_dump($_POST['redirecionar']);
*/