<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>
<?php

include_once 'classes/Cadastro.php';


$cadastro = new \classes\Cadastro();


$registros = $cadastro->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vagas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Lista de Vagas</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Empresa</th>
                <th>WhatsApp</th>
                <th>Email</th>
                <th>Descrição</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
                <tr>
                    <td><?php echo $registro['id']; ?></td>
                    <td><?php echo $registro['nome_empresa']; ?></td>
                    <td><?php echo $registro['numero_whatsapp']; ?></td>
                    <td><?php echo $registro['email_contato']; ?></td>
                    <td><?php echo $registro['descritivo_vaga']; ?></td>
                    <td><?php echo $registro['curso']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
