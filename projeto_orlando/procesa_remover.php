<?php


include_once "classes/Cadastro.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $cadastro = new \classes\Cadastro();

    $id = $_POST['id'];

    if($cadastro->remover($id)){
        echo "registro removido";
    }else{
        echo "erro";
    }
    

}












?>