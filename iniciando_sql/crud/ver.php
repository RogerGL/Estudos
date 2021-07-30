<?php

$conn = require('connection.php');

$id = $_GET['id'] ?? null;

$stmt = $conn->prepare('SELECT * FROM users WHERE id= ?');

$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

$user= $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
</head>
<body>
    <h1><?php echo $user['email']; ?> </h1>
        

        <p>O ID deste usuário é <?php echo $user['id']; ?></p>

        <p><a href="/crud">Voltar</a></p>

       <p> <a href="/crud/editar.php?id= <?php echo $user['id']; ?>">Editar</a>
           <a href="/crud/remover.php?id= <?php echo $user['id']; ?>">Remover</a>
       </p>
</body>
</html>