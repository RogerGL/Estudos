<?php

interface IDBStrategy
{
    public function connect();
    public function save();
    public function read();
}