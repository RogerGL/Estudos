<?php

    

 $conn = new mysqli('localhost', 'root', 'P@$$w0rd5698', 'php_mysql_iniciando');

 if ($conn->connect_errno) {
     die('Falhou em conectar: (' . $conn->connect_errno . ')' . $conn->connect_error);
 }

 return $conn;