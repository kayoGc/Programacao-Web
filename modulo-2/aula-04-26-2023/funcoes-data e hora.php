<?php 
    date_default_timezone_set("America/Sao_Paulo");


    $dataAtual = date("d/m/y");

    echo "<br/>Hoje é: ".$dataAtual."<br/>";

    $hora = date("h:i:s");

    echo "<br/>Agora são: ".$hora."<br/>";

    $dataHora = date("d/m/y h:i:s");

    echo "<br/>Data e hora: ".$dataHora."<br/>";

?>