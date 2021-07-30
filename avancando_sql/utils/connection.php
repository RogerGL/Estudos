<?php

$debug = true;

if ($debug) {
    /* 
    MYSQLI_REPORT_ERROR  Mostra os erros
    MYSQLI_REPORT_OFF    Oculta os erros
    MYSQLI_REPORT_STRICT Troca os erros para execoes
    MYSQLI_REPORT_INDEX Informa se um indice ruim foi utilizado em alguma query
    MYSQLI_REPORT_ALL É uma soma de todos, tirando o OFF
    */
    mysqli_report(MYSQLI_REPORT_ERROR);
}else {
    mysqli_report(MYSQLI_REPORT_OFF);
}

$conn =  new mysqli('localhost', 'root', 'P@$$w0rd5698', 'php_mysql_avancando');

if ($conn->connect_errno) {
    die('Falhou em conectar; ' . $conn->connect_errno);
}

return $conn;