<?php

//POLIMORFISMO -- metodo tem o mesmo retorno mas tem outra tratativa

namespace RogerZarpo\DB;

interface Db

{
    public function connect() :string;
}