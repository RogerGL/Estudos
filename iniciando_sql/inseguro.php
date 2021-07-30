<?php

//conexão com o banco

$email = $_GET['email'] ?? null;
$id = $_GET['id'] ?? 0;



$conn = new mysqli('localhost', 'root', 'P@$$w0rd5698', 'php_mysql_iniciando');

//$result = $conn->query('INSERT INTO users (email) VALUES ("'. $email . '")');

$result = $conn->query('SELECT * FROM users where id = ' . $id);

 $users = $result->fetch_all(MYSQLI_ASSOC);

 foreach ($users as $user) {
     echo $user["id"] . ' - ' . $user['email'] . "<br>";
 }

 //var_dump($users);


//sql injection usuario tenta injetar um codigo malicioso atraves de qualquer entrada para o banco de dados
