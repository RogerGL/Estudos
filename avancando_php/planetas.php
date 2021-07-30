<html>
    <head>
        <Title>Lista de Planetas</Title>

        <body>
            <?php
               $planetas = [
                'Mercúrio',
                'Vênus',
                'Terra',
                'Marte',
                'Júpiter',
                'Saturno',
                'Urano',
                'Netuno',
                'Plutão'
            ];

            ?>
        <ul>
            <?php foreach ($planetas as $planeta):?>
                <li>
                    <a href="get.php?planeta=<?php echo $planeta?>"><?php echo $planeta?></a>
                </li>
            <?php endforeach;?>
        </ul>

        </body>

    
    </head>



</html>