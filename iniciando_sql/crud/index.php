<?php
$conn = require 'connection.php';

$result = $conn->query('SELECT *  FROM users');

$users = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    foreach ($users as $user): 
                    
                
                ?>
                <tr>
                    <td><?php
                        echo $user['id'];
                    ?></td>
                    <td><?php
                        echo $user['email'];
                    ?></td>
                    <td>
                        <a href="/crud/ver.php?id=<?php echo $user['id'];?>">Ver</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <p><a href="/crud/adicionar.php">Adicionar</a></p>

</body>

</html>