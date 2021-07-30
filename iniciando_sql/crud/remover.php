<?php

$conn = require('connection.php');

$id = $_GET['id']?? null;

$stmt = $conn->prepare('DELETE  FROM users WHERE id= ?');
$stmt->bind_param('i', $id);
$stmt->execute();

//redirecionamento
header('location:/crud');