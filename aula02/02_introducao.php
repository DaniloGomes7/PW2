<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução - PHP</title>
</head>
<body>

    <?php
    
        //código em php precisa estar dentro da tag

    
        //declarando variaveis
        $nome = "José Davi"; //String
        $idade = 19;    //inteiro
        $altura = 1.65; //Real
        $isAluno = true; //Boolean


        //escreva na tela
        echo $nome;
        echo "<br>";

        //texto sensiveis
        $texto = "Isso é diferente";
        $Texto = "Disso";

        echo $texto;
        echo "<br>";
        echo $Texto;
    
        $texto = "Isso";
        $Texto = "disso";

        echo "<br> $texto é diferente $Texto";

        echo "<br> Meu nome é $nome <br>";

        //quebra de linha
        echo "Quebra de <br> linha";

        echo "<br> Nome: $nome <br> Idade: $idade <br> Altura: $altura";
    ?>

</body>
</html>