<?php 
   
    // insere a Classe
    include_once 'produto-classes.php';

    // Cria um objeto
    $valor = new Produto();
    $valor2 = new Produto();

    // Atribuir valores
    $valor->Codigo = 4001;
    $valor->Descricao = 'CD - the best of Eric Clapton';

    // atribuindo valor 2
    $valor2->Codigo = 4002;
    $valor2->Descricao = 'CD - The Eagles Hotel California';


    // imprimir valores
    $valor->ImprimeEtiqueta();
    $valor2->ImprimeEtiqueta();

?>