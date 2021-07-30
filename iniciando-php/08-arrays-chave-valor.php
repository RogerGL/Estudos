<?php
// arrays chaves 0 1 2 3 4 5

//maneira esplicita com o Arrow =>
//determinando a chave
$array1 = [
  0  => 40,
  1  => 200,
  2  => 100,
  3  =>  150,
  4  => "School of Net",
  5  =>  true
];

//determinando a chave

$array2 = [
    "luiz"  => 40,
     200,
     100,
     3000   => 150,
     "School of Net",
      true
  ];

  echo $array2["luiz"]; //após determinar a chave, o array vai ser resetado se as outras forem implicitas e o proxima chave é 0
  echo "\n";
  echo $array2[0]; // ou seja, o valor que ira mostrar vai ser o 200
  echo "\n";
  echo $array2[3000]; //como foi declarado a chave 3000, o prox valor pode ser chamado pelo valor 3001
  echo "\n";
  echo $array2[1];
  echo "\n";
  echo $array2[3001];
  echo "\n";
  // echo com a função var_dump, consegue pegar qualquer tipo de variavel e valor e mostrar em um array
  echo var_dump($array2);