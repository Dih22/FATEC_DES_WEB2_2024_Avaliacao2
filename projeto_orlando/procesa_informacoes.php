<?php

include_once 'classes/Cadastro.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cadastro = new \classes\Cadastro();
    
    
    $cadastro->empresa = $_POST['empresa'];
    $cadastro->whatsapp = $_POST['whatsapp'];
    $cadastro->email = $_POST['email'];
    $cadastro->descricao = $_POST['descricao'];
    $cadastro->curso = $_POST['curso'];

    
    if ($cadastro->inserir()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao realizar o cadastro.";
    }
}
?>
