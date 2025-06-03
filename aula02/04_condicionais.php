<?php

    $idade = 19;
    $isCnh = false;

    if ($idade >= 18) {
        echo "Maior de idade <br>";
    } else {
        echo "Menor de idade <br>";
    }

    if ($isCnh && $idade >= 18) {
        echo "Apto para dirigir <br>";
    } else if (!$isCnh && $idade >= 18){
        echo "Apto a tira a habilitação <br>";
    } else {
        echo "Não pode dirigir";
    }

    echo "<br> <hr>";

    echo "<h2> Exemplo 2 </h2>";

    $isAcesso = true;

    if (!$isAcesso) {
        echo "Acesso negado <br>";
    } else {
        echo "Acesso autorizado <br>";
    }

    echo "<hr> <br>";

    echo "<h2>Exemplo 3</h2>";

    $mediaDoAluno = 10;

    if ($mediaDoAluno >= 9 && $mediaDoAluno <= 10) {
        echo "Nota: MB";
    } else if ($mediaDoAluno >= 7 && $mediaDoAluno <=8) {
        echo "Nota: B";
    } else if ($mediaDoAluno >= 5 && $mediaDoAluno < 7) {
        echo "Nota: R";
    } else if ($mediaDoAluno >= 0 && $mediaDoAluno < 5) {
        echo "Nota: I";
    } else {
        echo "Média inválida";
    }

?>