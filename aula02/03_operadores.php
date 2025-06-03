<?php

    /*
    
    (+) Adição
    (-) Subtração
    (*) Multiplicação
    (/) Divisão
    (%) Resto da divisão    
     
    */

    //Exemplo de soma 

    echo "<h2> Operador de adição </h2> <br>";

    $primeiroNumero = 10;
    $segundoNumero = 90;

    //resultado da expressão
    $resultado = $primeiroNumero + $segundoNumero;

    //Imprimindo na tela o resultado da expressão
    echo "$primeiroNumero + $segundoNumero = $resultado <br>";
    echo "<hr> <br>";
 
    //Operador de subtração
    
    echo "<h2>Operador de subtração</h2> <br>";

    $primeiroNumeroDigitado = 50;
    $segundoNumeroDigitado = 30;

    $resultadoDaOperacao = $primeiroNumeroDigitado - $segundoNumeroDigitado;

    echo "1° numero digitado: $primeiroNumeroDigitado <br>";
    echo "2° numero digitado: $segundoNumeroDigitado <br>";
    echo "Resultado da expressao: $resultadoDaOperacao <br>";


    echo "<hr><br>";

    echo "<h2> Operador de multiplicação </h2>";

    $primeiroNumeroDaOperacao = 7;
    $segundoNumeroDaOperacao = 8;

    $resultadoDaMultiplicacao = $primeiroNumeroDaOperacao * $segundoNumeroDaOperacao;

    echo "Primeiro número: $primeiroNumeroDaOperacao <br>";
    echo "Segundo número: $segundoNumeroDaOperacao <br>";
    echo "A multiplicação entre o número $primeiroNumeroDaOperacao e $segundoNumeroDaOperacao é $resultadoDaMultiplicacao";

    echo "<hr><br>";

    echo "<h2>Operador de divisão</h2>";

    $primeiroNumeroInserido = 81;
    $segundoNumeroInserido = 9;

    $resultadoDaDivisao = $primeiroNumeroInserido / $segundoNumeroInserido;

    echo "O resultado da divisao entre $primeiroNumeroInserido e $segundoNumeroInserido é $resultadoDaDivisao";


?>