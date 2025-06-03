<?php

//estrutura básica do PHP

//Comando output php
echo "Olá mundo <br><br>";

//tipos de dados

$nome = "Yasmim Caires"; //String
$idade = 18;        //Inteiro
$altura = 1.50;     //Double
$peso = 50.70;      //Double
$isVacina = true;   //Boolean

echo "Nome: $nome <br>
Idade: $idade <br>
Altura: $altura <br>
Peso: $peso <br>
Vacinada: $isVacina <br><br>";

//CONDICIONAIS

if ($idade >= 18) {
    echo "$nome, é maior de idade e possui $idade anos <br>";
}

//LAÇOS DE REPETIÇÃO

//FUNÇÃO
function verificaNumerosPares(): void{
for($i = 1; $i <= 100; $i++) {

    //verifica se o numero é par

    if ($i % 2 == 0) {
        echo "$i Número par<br>";

        } 
    }
}

//CHAMANDO FUNÇÃO
verificaNumerosPares()

?>