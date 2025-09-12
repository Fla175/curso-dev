<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 

        # Const

        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        echo BD_URL . '<br>';
        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';

        // -----------------------------------

        echo '<hr>';

        # String

        $nome = 'Flávio F. Pomin';

        // -----------------------------------

        echo '<hr>';

        # Int

        $idade = 12;

        // -----------------------------------

        echo '<hr>';

        # Float

        $altura = 161;

        // -----------------------------------

        echo '<hr>';

        # Boolean

        $siu = true;

        // -----------------------------------

        echo '<hr>';

        # Array

        // Recupera todos os valores

        $vogais = array('A', 'E', 'I', 'O', 'U');

        echo '<pre>';
            // Mais detalhado e complexo
            var_dump($vogais);
        echo '</pre>';

        echo '<hr>';

        echo '<pre>';
            // Mais simples e legível
            print_r($vogais);
        echo '</pre>';

        // Recupera um valor específico

        echo $vogais[4];

        // -----------------------------------

        echo '<hr>';

        # Array Multidimensional

        $samsung = [];
            $samsung['Linha_S'] = [];
                $samsung['Linha_S']['Galaxy S25'] = '6.299,10'; // Modelo mais recente
                $samsung['Linha_S']['Galaxy S24'] = '3.912,06';
                $samsung['Linha_S']['Galaxy S23'] = '2.697,04';

            $samsung['Linha_Z'] = [];
                $samsung['Linha_Z']['Fold'] = [];
                    $samsung['Linha_Z']['Fold']['Galaxy Z Fold 6'] = '8.798,00'; // Modelo mais recente
                    $samsung['Linha_Z']['Fold']['Galaxy Z Fold 5'] = '4.671,20';
                    $samsung['Linha_Z']['Fold']['Galaxy Z Fold 4'] = '2.860,02';

                $samsung['Linha_Z']['Flip'] = [];
                    $samsung['Linha_Z']['Flip']['Galaxy Z Flip 6'] = '6.479,19'; // Modelo mais recente
                    $samsung['Linha_Z']['Flip']['Galaxy Z Flip 5'] = '4.499,00';
                    $samsung['Linha_Z']['Flip']['Galaxy Z Flip 4'] = '3.999,00';

            $samsung['Linha_A'] = [];
                $samsung['Linha_A']['Galaxy A55'] = '4.224,63'; // Modelo mais recente
                $samsung['Linha_A']['Galaxy A15'] = '1.028,52';
                $samsung['Linha_A']['Galaxy A5'] = '839,00';

            $samsung['Linha_M'] = [];
                $samsung['Linha_M']['Galaxy M50'] = '3.199,00'; // Modelo mais recente
                $samsung['Linha_M']['Galaxy M35'] = '1.799,00';
                $samsung['Linha_M']['Galaxy M34'] = '1.399,99';

        echo '<pre>';
        var_dump($samsung);
        echo '</pre>';

        echo '<pre>';        //     *
        print_r($samsung);   //    * *
        echo '</pre>';       //    ***
        //                          |
        // Array Quadridimensional -| Espaço: Pesado

     ?>

     <h1>Ficha de cadastro</h1>
     <br>
     <p>
        Nome: <?= $nome ?> <br>
        Idade: <?= $idade ?> anos <br>
        Altura: <?= $altura ?> cm <br>
        Sabe inglês? <?= $siu ?>
     </p>
    
     <hr>

     <h1>Vogais</h1>
     <br>
     <p> <?= $vogais ?> </p>

</body>
</html>