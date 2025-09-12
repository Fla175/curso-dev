<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

        $nome = 'Flávio';
        $cor = 'Azul e branco';
        $idade = 12;
        $hobby = 'Comer e dormir';
        
        // operador .
        echo 'Olá ' . $nome . ', vi que você tem ' . $idade . ' anos, suas cores preferidas são ' . $cor . ' e você gosta de ' . $hobby ;

        echo '<br>';

        // aspas duplas:
        echo "Olá $nome, vi que você tem $idade anos, suas cores preferidas são $cor e você gosta de $hobby.";

     ?>
</body>
</html>