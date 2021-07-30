<?php

require_once "DBMySQL.php";
require_once "DBPostgree.php";

$bancoDeDados = new DBMySQL();

$bancoDeDados->connect();
$bancoDeDados->save();
$bancoDeDados->read();