<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>cadastro</h2>

    <form action="procesa_informacoes.php" method="post">
        <label>nome da empresa:</label><br>
        <input type="text" name="empresa"><br><br>

        <label>numero do whatsapp:</label><br>
        <input type="number" name="whatsapp"><br><br>

        <label>email:</label><br>
        <input type="email" name="email"><br><br>

        <label>descrição da vaga:</label><br>
        <textarea name="descricao"></textarea><br><br>

        <label>selecione o curso</label><br>
        <select name="curso">
            <option value="1">DSM</option>
            <option value="2">GE</option>
        </select><br><br>

        <input type="submit" value="registrar">
    </form>
    
</body>
</html>