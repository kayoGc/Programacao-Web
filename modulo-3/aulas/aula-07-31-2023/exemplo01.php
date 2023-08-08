<?php 
    // Criando conexão com Banco de dados

    $con = mysqli_connect("localhost", "root", "", "db_exemplo");

    // Checando a conexão

    if (mysqli_connect_errno()) {
        echo "Erro ao conectar com a base de dados" .
        
        mysqli_connect_error();
        
    } else {
        $sql = "CREATE DATABASE db_2HPW2";
            if(mysqli_query($con,$sql)){
                echo "<br/> base de Dados Criada com Sucesso!!";
            }else{
                echo "<br/> Erro: " . mysqli_connect_error();
            }

        mysqli_close($con);

        echo "<br> Conexão fechada";
    }

    
?>