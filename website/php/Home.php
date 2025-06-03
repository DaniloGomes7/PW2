<?php

    session_start();
    if (isset($_SESSION["usuario_id"])){
        header("Location: Login.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?> </h1>
    <h2>Só visualiza aqui se estiver logado.</h2>
</body>
</html>