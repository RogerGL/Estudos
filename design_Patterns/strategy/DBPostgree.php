<?php

require_once "IDBStrategy.php";

class DBPostgree implements IDBStrategy
{
    public function connect()
    {
        echo "Connected to MySQL! <br>";
    }
    public function save()
    {
        echo "Saved to MySQL! <br>";
    }
    public function read()
    {
        echo "Returned to MySQL! <br>";
    }
}