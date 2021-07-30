<?php

require_once "File.php";
require_once "Directory.php";

$pastaDeCursos = new DirectorySON("Pasta de Cursos!");

$cursoDePHP = new File("cursoPHP.zip");
$cursoDeJava = new File("cursoJava.zip");
$cursoDeCSS = new File("cursoCSS.zip");

$pastaDeCursos->add($cursoDePHP);
$pastaDeCursos->add($cursoDeJava);
$pastaDeCursos->add($cursoDeCSS);

$pastaDiretoAoPonto = new DirectorySON("Direto ao Ponto");

$DPdeCSS = new File("DPdeCSS.mp4");
$DPdeJava = new File("DPdeJava.mp4");

$pastaDiretoAoPonto->add($DPdeCSS);
$pastaDiretoAoPonto->add($DPdeJava);

$pastaDeCursos->add($pastaDiretoAoPonto);

$pastaDeCursos->ls();