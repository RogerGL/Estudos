<?php 

namespace RogerZarpo\Db;

use RogerZarpo\MyException;

class ORM
{
    public $db;
    public function setDb(Db $db)
    {
        $this->db=$db;
    }
    public function select(bool $data)
    {
        if ($data) {
            return[];
        }
        throw new MyException("Deveria ser positivo  :C ",1);
        
    }
}