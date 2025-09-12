<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

    // Gettype() => Retorna o tipo da variável
    $valor = 15.35;

    // $valor2 = (float) $valor; // float/double
 
    // $valor2 = (bool) $valor; // boolean/bool

    // $valor2 = (string) $valor;

    $valor2 = (int) $valor; // int/integer

    echo $valor. ' ' . gettype($valor);
    echo '<br>';
    echo $valor2. ' ' . gettype($valor2); 

     ?>
</body>
</html>