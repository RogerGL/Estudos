<?php

    ini_set('mysqli.allow_persistent', '0');

 $conn = new mysqli('localhost', 'root', 'P@$$w0rd5698', 'php_mysql_iniciando');

 if ($conn->connect_errno) {
     die('Falhou em conectar: (' . $conn->connect_errno . ')' . $conn->connect_error);
 }
/*
 echo "<br>";

 echo $conn->host_info;
 */

 $sql = 'CREATE TABLE users(
     id INT AUTO_INCREMENT PRIMARY KEY,
     email VARCHAR(255) NOT NULL
 )';

    echo "<br>";

 if (!$conn->query($sql)) {
     echo 'Tabela users já existe.';
 }

    echo "<br>";


 //$result = $conn->query('INSERT INTO users (email) VALUE ("rogergl@.com")');

 $result = $conn->query('SELECT * FROM users');

 $users = $result->fetch_all(MYSQLI_ASSOC);

 foreach ($users as $user) {
     echo $user["id"] . ' - ' . $user['email'] . "<br>";
 }

 var_dump($users);

/*
 echo '<ul>';
 while ($user = $result->fetch_assoc()) {
    echo '<li>' .$user['id'] .'º ' . $user['email'] . '</li>';
}

 echo '</ul';

 */

 //print_r($result);

 //var_dump($result);