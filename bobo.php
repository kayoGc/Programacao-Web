<?php 
    $con = mysqli_connect("10.67.96.165", "etecia" ,"123456", "dbloja");

    if (mysqli_connect_errno()){
        echo "Erro ao conectar com base de dados: " . mysqli_connect_error();
    }else{
        echo "Conexão aberta";
    }
?>