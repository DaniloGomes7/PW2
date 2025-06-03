<?php
//declarando as variaveis que vamos utilizar na conexão
$host = 'localhost';
$nomeBanco = 'crud_pdo';
$usuario = 'root';
$senha = '';

//Criar um novo objeto que conecta no banco de dados
//Vamos utilizar o PDO para isso, passando as variaveis,
//acima como parametro
try {
    $conexao = new PDO(
        "mysql:host=$host;
         dbname=$nomeBanco;charset=UTF8",
        $usuario,
        $senha
    );
    //Define como o PDO vai tratar o erro no caso, vai lançar
    //uma exceção, que posteriormente sera tratada no CATCH

    $conexao->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
    echo"Conexao realizada com Êxito!! <br><hr><br>";

} catch (PDOException $e) {
    echo "ERRO:" . $e->getMessage();        

}



?>