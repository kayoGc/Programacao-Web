<?php 
    $texto = "Micro computador";

    
    $tamanho = strlen($texto); // tamanho da string

    echo "<br>" . $texto . " possui " . $tamanho . " caracteres";

    echo "<br>" . strtoupper($texto);

    echo "<br>" . strtolower($texto);

    echo "<br>" . ucfirst($texto);

    echo "<br>" . ucwords($texto);

    echo "<br>" . substr($texto, 13, 3); // mostra 3 caracteres a partir da posição 13 

    echo "<br>" . str_replace("nano", "micro", $texto);
?>