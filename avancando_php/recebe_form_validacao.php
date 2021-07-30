<?php

$nome = trim($_POST['nome']) ;
$interesses = $_POST['interesse'] ?? null;
$mensagem = strip_tags($_POST['mensagem']);
/*
$email = $_POST['email'];

$onde_conheceu = $_POST['onde_conheceu'];

$redirecionar = $_POST['redirecionar'];
*/

if (empty($nome)) {
    echo "Informe o nome!  <br>";
}



if (is_null($interesses)) {
    echo "Selecione pelo menos um item em interesses! <br>";
}




echo $mensagem;

/*
//empty()   testa valores vazios, trata uma string vazia, se é vazia/ 0 / null / false ou array vazio
// se for o caso, ele retorna verdadeiro



empty($nome); 

// trim tbm serve, ele retira o espaço do começo e do final, para utilizar em conjunto com o empty
trim($nome);

*/