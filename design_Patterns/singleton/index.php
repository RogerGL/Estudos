<?php

require_once " GovernoSingleton.php";
GovernoSingleton::pegarInstancia()->realizarEleicao();
var_dump(GovernoSingleton::pegarInstancia()->nomeDoPais);
