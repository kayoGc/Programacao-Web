<?php 
    $nome_usu = $_POST['nome-usu'];
    
    $senha_usu = $_POST['senha-usu'];


    if ($nome_usu == 'admin@ad' && $senha_usu == 'admin') {

        echo "Bem vindo ao sistema.";

    }else{
        echo "Erro ao acesssar o sistema.";
    }


?>