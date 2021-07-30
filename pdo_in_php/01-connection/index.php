<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "Service_Product.php";

$db = new Conn('localhost', 'test_oo', 'root', 'P@$$w0rd5698');
$product = new Product;
$service = new ServiceProduct($db, $product);

print_r($service->list());

//conexão com pdo ao db
//fetchall sempre tras todos os registros do banco de dados
/*
try {
    $conn = new \PDO('mysql:host=localhost;dbname=test_oo','root','P@$$w0rd5698');

    

    //metodo para proteger o SQL INJECTION
   $query = "select * from products where id = :id";
   $stmt = $conn->prepare($query);
    $stmt->bindValue(':id', $_GET['id'] );
    $stmt->execute();
    
    print_r($stmt->fetchAll());

    //$query = "Insert into products (name, descr) values ('eBook','Learn JavaScript')";
    //$query = "select * from products";
  //  $stmt = $conn->query($query);
   // $list = $stmt->fetchall(PDO::FETCH_ASSOC);
    //echo $list['name'];
   // print_r($list);
 
   foreach ($conn->query($query) as $product) {
         echo $product['id'] .  "<br>";  
         echo $product['name'] .  "<br>";
         echo $product['descr'] . "<br>";
       
   }
  

} catch (\PDOException $e) {
    echo "Erro! Message:" .$e->getMessage(). " Code:" . $e->getCode();
}

*/