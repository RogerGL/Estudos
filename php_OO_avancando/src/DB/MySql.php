<?php

namespace RogerZarpo\DB;


// SOBRE ESCREVEU O METODO DA CLASSE DB, POLIMORFISMO
class MySql implements Db
{
    public function connect():string
    {
            return 'connected to MySQL';
    }
}