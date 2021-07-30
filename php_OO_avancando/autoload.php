<?php

require __DIR__ . '/src/Autoload.php';

$autoload = new RogerZarpo\Autoload;

$autoload->register();

$autoload->addNamespace('RogerZarpo','src');

//polimorfismo é mudança,