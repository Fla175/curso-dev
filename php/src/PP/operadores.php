<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 

    // Prática com Operadores Aritméticos:

        // Atribuição Composta

        $oi = 4;
        $oi += 5;  // Equivale a: $oi = $oi + 5;
        echo $oi;  // Saída: 9

        echo '<br>';

        $oi -= 2;  // Equivale a: $oi = $oi - 2;
        echo $oi;  // Saída: 7

        echo '<br>';

        $oi *= 3;  // Equivale a: $oi = $oi * 3;
        echo $oi;  // Saída: 21

        echo '<br>';

        $oi /= 7;  // Equivale a: $oi = $oi / 7;
        echo $oi;  // Saída: 3

        echo '<br>';

        $oi %= 2;  // Equivale a: $oi = $oi % 2;
        echo $oi;  // Saída: 1

        echo '<br>';

        // Cálculo Direto

        $a = 10;
        $b = 5;

        $soma = $a + $b;         // Adição

        echo '<br>';

        $subtracao = $a - $b;    // Subtração

        echo '<br>';

        $multiplicacao = $a * $b; // Multiplicação

        
        $divisao = $a / $b;      // Divisão
        $modulo = $a % $b;       // Módulo (resto da divisão)

        echo "Soma: $soma, Subtração: $subtracao, Multiplicação: $multiplicacao, Divisão: $divisao, Módulo: $modulo";

        // Função eval()

        $expressao = "10 + 5 * 2";
        $resultado = eval("return $expressao;");

        echo "Resultado: $resultado";

        // Soma

        $num1 = 13;
        $num2 = 4;

        // Subtração

        $num3 = 15;
        $num4 = 7;

        // Multiplicação

        $num5 = 600;
        $num6 = 53;

        // Divisão/Modulação

        $num7 = 41;
        $num8 = 3;

        // --------------------------------------------

        // Soma

        echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);

        echo '<br>';

        // Subtração

        echo "A subtração entre $num3 e $num4 é " . ($num3 - $num4);

        echo '<br>';

        // Multiplicação

        echo "A multiplicação entre $num5 e $num6 é " . ($num5 * $num6);

        echo '<br>';

        // Divisão

        echo "A divisão entre $num7 e $num8 é " . ($num7 / $num8);

        echo '<br>';

        // Modulação

        echo "O resto da divisão entre $num7 e $num8 é " . ($num7 % $num8);

        // Prática com o Operador de Incremento/Decremento:

        ?>

        <h3>Pré-Incremento</h3>
        <?php

            $num = 5;

            echo "Tem ++$num telefones aqui";

        ?>

        <h3>Pós-Incremento</h3>
        <?php

            $num = 5;

            echo "Tem $num++ telefones aqui";

        ?>

        <h3>Pré-Decremento</h3>
        <?php
        
            $num = 6;

            echo "Só tem --$num telefones aqui";

        ?>

        <h3>Pós-Decremento</h3>
        <?php
        
            $num = 6;

            echo "Tem $num-- telefones aqui";

    // --------------------------------------------------

    // Tipos de Operadores:

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

        // ------------------------------------------

        // Operadores Aritméticos:

        // Adição (+) - Soma os valores setados

        // Subtração (-) - Subtrai e mostra a diferença entre os valores setados

        // Multiplicação (*) - Multiplica (Soma a si mesmo Y vezes) e mostra o produto dos valores setados

        // Divisão (/) - Divide e mostra o Quociente dos valores (O quanto é dividido para cada parte)

        // Módulo (%) - Mostra o Resto existente em uma operação de divisão

     ?>

</body>
</html>