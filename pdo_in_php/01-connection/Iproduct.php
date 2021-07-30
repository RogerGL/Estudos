<?php

interface  IProduct
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getDescr();
    public function setDescr($descr);
}