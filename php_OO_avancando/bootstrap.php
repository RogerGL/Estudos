<?php



require __DIR__ . '/autoload.php';

/*
$person = new RogerZarpo\People\Person;
$person->setName('Roger');
$person->setAge(18);
$person->setWeight(90,0);


var_dump($person);*/

//var_dump((new RogerZarpo\DB\MySql)->connect());
//var_dump((new RogerZarpo\DB\Db)->connect());

//var_dump((new RogerZarpo\DB\ORM) ->select(true));
/*
try {
    (new RogerZarpo\Db\ORM)->select(false);
} catch (RogerZarpo\MyException $e) {
    echo $e->getMessage();
} catch (\Exception $e) {
    echo "ERRO: " . $e->getMessage();
}
*/


$people = new RogerZarpo\People\Person;
$people->name = 'roger';
$people->age = 18;
$people->weight = 60.8;
var_dump($people->name);

echo $people;