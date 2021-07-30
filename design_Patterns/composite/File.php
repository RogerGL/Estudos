<?php

require_once "IFile.php";

class File implements IFile
{
    public $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

    public function ls()
    {
        echo "Nome do Arquivo: ". $this->name."<br>";
    }
}