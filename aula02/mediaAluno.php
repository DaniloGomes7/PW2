<?php

    $nome = $_POST["nome"];
    $primeiraNota = $_POST["primeiraNota"];
    $segundaNota = $_POST["segundaNota"];
    $terceiraNota = $_POST["terceiraNota"];
    $quartaNota = $_POST["quartaNota"]; 
    $media = ($primeiraNota + $segundaNota + $terceiraNota + $quartaNota) / 4;

    if ($media >= 9 && $media <= 10) {
        echo "$nome, sua nota foi MB (Muito bom) e sua média, $media";
    } else if ($media >= 7 && $media <= 8) {
        echo "$nome, sua nota foi B (Bom) e sua média, $media";
    } else if ($media >= 5 && $media < 7) {
        echo "$nome, sua nota foi R (Regular) e sua média, $media";
    } else if ($media >= 0 && $media < 5) {
        echo "$nome, sua nota foi I (Insatisfatório) e sua média, $media";
    } else {
        echo "Nota inválida";
    }

?>