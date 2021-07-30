<?php


$id = $_GET['id'] ?? 0;

$id2 = $_GET['id2'] ?? 0;



$conn = new mysqli('localhost', 'root', 'P@$$w0rd5698', 'php_mysql_iniciando');


$stmt = $conn->prepare('SELECT * FROM users where id > ? and id < ?');


    /* os dados aceitos no bind , para executar as querys e deixar "seguro"
        i de integer
        s de string 
        b de blob
        d de double
    */
    $stmt->bind_param('ii', $id, $id2);

    
    $stmt->execute();
    $result = $stmt->get_result();



 $users = $result->fetch_all(MYSQLI_ASSOC);

 foreach ($users as $user) {
     echo $user["id"] . ' - ' . $user['email'] . "<br>";
 }
