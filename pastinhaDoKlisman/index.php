<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BookingStar</title>
    </head>
    <body>
        <?php

require __DIR__ . '/vendor/autoload.php';

            if (file_exists('conection.php')) {
                include 'conection.php';

                if($connection){
                    include'testa_login.php';
                }else{
                    echo 'conexao mal sucedida';
                }
            }
        ?>

    </body>
</html>