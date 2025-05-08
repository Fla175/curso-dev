<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        // If, Else If e Else:
        // Prática com Operadores Condicionais:

        // Igual:
        if (2 == 2) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Idêntico:
        if (4 === 4) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Diferente:
        if (10 != 6) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Não Idêntico:
        if (20 !== '3') {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Maior:
        if (9 > 5) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Menor:
        if (7 < 2) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Maior ou Igual:
        if (3 >= 2) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        if (8 >= 8) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Menor ou Igual:
        if (3 <= 6) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        if (5 <= 5) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Prática com Operadores Lógicos:
        
        // Operador E:
        if (4 == 3 && 29 >= 9) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Operador OU:
        if (6 == 6 || 10 > 3) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Operador XOR:
        if (3 == 3 XOR 5 < 2) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }

        // Operador de Negação:
        if (8 == 8 && !(1 > 3)) {
            echo 'Verdadeiro<br>';
        } else {
            echo 'Falso<br>';
        }
    ?>

        // Prática com Operadores Ternários:

    <h1>Detalhes do Pedido</h1>
    <?php
        $usuario_possui_cartao_loja = true;
        $valor_compra = 50;
        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
            $valor_frete = 0;
        } elseif ($usuario_possui_cartao_loja && $valor_compra >= 300) {
            $valor_frete = 10;
        } elseif ($usuario_possui_cartao_loja && $valor_compra >= 100) {
            $valor_frete = 25;
        } else {
            $recebeu_desconto_frete = false;
        }
    ?>
    <p>Possui cartão da oja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?></p>
    <p>Valor da compra: R$<?= $valor_compra; ?></p>
    <p>Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?></p>
    <p>Valor do frete: R$<?= $valor_frete; ?></p>

        // -----------------------------------------

        // Switch: Alternativa ao if ou else if para múltiplas condições, cada opção é definida com case.

        <?php

        $parametro = 2;

        switch ($parametro) {

            case 1:
                echo 'Entrou no case 1';
                break;

            case 2:
                echo 'Entrou no case 2';
                break;

            case 3:
                echo 'Entrou no case 3';
                break;
            
            default:
                echo 'Não atendeu os requisitos dos 3 cases';
                break;
        };

        ?>

        // -----------------------------------------

        // Operadores Condicionais / de Comparação:

            // Igual (==) - Verifica se os valores comparados são iguais
            
            // Idêntico (===) - Verifica se os valores comparados são iguais e do mesmo tipo

            // Diferente (!=) ou (<>) - Verifica se os valores comparados são diferentes

            // Não Idêntico (!==) - Verifica se os valores comparados são diferentes e de tipos diferentes

            // Menor (<) - Verifica se o valor da esquerda é menor que o valor da direita

            // Maior (>) - Verifica se o valor da esquerda é maior que o valor da direita

            // Menor Igual (<=) - Verifica se o valor da esquerda é menor ou igual ao valor da direita
            
            // Maior Igual (>=) - Verifica se o valor da esquerda é maior ou igual ao valor da direita

        // -----------------------------------------

        // Operadores Lógicos:

            // Operador E (AND) ou (&&) - Verdadeiro se todas as expressões forem verdadeiras
            
            // Operador OU (OR) ou (||) - Verdadeiro se pelo menos uma das expressões for verdadeira

            // Operador XOR (XOR) - Verdadeiro apenas se uma das expressões for verdadeira, mas não ambas

            // Operador de Negação (!) - Inverte o resultado da expressão

        // -----------------------------------------

        // Operadores Ternários:

            // Operador Condicional (? :) - Escolhe entre dois valores com base em uma condição

            // Operador de Encadeamento Opcional (?.) - Acessa algo apenas se existir (não for null ou undefined)

            // Operador de Coalescência Nula (??) - Define um valor padrão quando outro está ausente (null ou undefined)

</body>
</html>