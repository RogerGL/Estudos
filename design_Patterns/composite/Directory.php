<?php

require_once "IFile.php";  

class DirectorySON implements IFile
{
    public $name;
    public $files = [];
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function add(IFile $file)
    {
        array_push($this->files,$file);
    }

    public function ls()
    {
       echo "Número de arquivos: " .count($this->files) . "<br>";
        for ($i=0; $i < count($this->files); $i++) { 
            $this->files[$i]->ls();
        }
    }   
}
