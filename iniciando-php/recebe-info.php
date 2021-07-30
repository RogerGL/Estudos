

<?php
// protocolo HTTP requisita algo atraves do browser, podendo sendo com "VERBOS" como:
//  GET  e  POST

//variavel global $GEt  é um array ocm todas as informações passasdas
/* podendo alterar os valores e armazenar, alterando direto no link do browser, apos o destino da pasta, colocar "?" e os valores
   ex: localhost:8000/recebe-info.php?nome=Roger
*/
// O POST DEIXA OMITIDO PARA O USUARIO, OU SEJA, NÃO APARECE NA URL
var_dump($_GET); 
var_dump($_POST);

?>

<h1><?php
    //echo $_GET['nome'];
?></h1>
<h1>
    <?php
    echo $_POST['nome'];
    ?>
</h1>

