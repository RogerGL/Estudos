<?php


class Product implements IProduct
{
    private $id;
    private $name;
    private $descr;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getDescr()
    {
        return $this->descr;
    }
    public function setDescr($descr)
    {
        $this->descr = $descr;
        return $this;
    }
}
