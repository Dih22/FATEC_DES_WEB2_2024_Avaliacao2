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
    <h2>remover</h2>
    <form action="procesa_remover.php" method="post">
        <label>digite o id do registro para remover</label><br>
        <input type="number" name="id"><br>
        <input type="submit" value="remover">
    </form>
</body>
</html>