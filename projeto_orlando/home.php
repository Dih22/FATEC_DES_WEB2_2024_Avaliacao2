<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
</head>
<body>
    <center>
        <h2>Vagas de Estágio</h2>
    </center>
    
    <br>
    <!--
    Espera-se botões aqui
    -->
    <a href="login.php">Logout</a><br>
    <a href="cadastrar.php">cadastrar vaga</a><br>
    <a href="remover_form.php">remover vaga</a><br>
    <a href="listar.php">listar vagas</a><br>
</body>
</html>