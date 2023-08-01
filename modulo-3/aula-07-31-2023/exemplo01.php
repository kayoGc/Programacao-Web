<?php 
    // Criando conexão com Banco de dados

    $con = mysqli_connect("localhost", "root", "", "db_exemplo");

    // Checando a conexão

    if (mysqli_connect_errno()) {
        echo "Erro ao conectar com a base de dados" .
        
        mysqli_connect_error();
        
    } else {
        echo "Conexão Aberta";

        mysqli_close($con);

        echo "<br> Conexão fechada";
    }

    
?>