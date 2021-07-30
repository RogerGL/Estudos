<?php

$conn = require __DIR__.'/01-connection/connection.php';

$sql = '
    CREATE TABLE products(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        desc VARCHAR(100) NOT NULL
    )
';