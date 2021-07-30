<?php

$conn = require __DIR__.'/utils/connection.php';

$save = true;

$conn->query('TRUNCATE posts');


//file get contents, como nome ja diz ele pega arquivos externamente.
$sql = file_get_contents(__DIR__.'/insert_posts.sql');

$conn->begin_transaction(); //diz que todo sql que esta no codigo, vai decidir se vai utilizar ou n
$conn->query($sql);
//$conn->commit();//commit efetiva, rollback não
//$conn->rollback();// aqui eu falei que não irei utilizar o sql

if ($save) {
    $conn->commit();
}else {
    $conn->rollback();
}

echo 'START SELECT' . PHP_EOL;
echo PHP_EOL;

$result = $conn->query('SELECT * FROM posts');
$posts = $result->fetch_all(MYSQLI_ASSOC);


foreach ($posts as $post) {
    echo $post['title'] . PHP_EOL;
    echo $post['body'] . PHP_EOL;
    echo PHP_EOL;
}

echo 'END SELECT' . PHP_EOL;