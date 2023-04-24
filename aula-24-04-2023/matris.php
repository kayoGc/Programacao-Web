<?php 
    $emp = array(
        array(1,"José",4000),
        array(2,"Maria",5000),
        array(3,"João",3000)
    );

    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            echo $emp[$linha][$coluna] . "  ";
        }
        echo "<br>";
    }
   
    echo "<pre>";
    var_dump($emp); 
    echo "</pre>";
    /*$func =  array(
        array(1,"Francisca",1500),
        array(2,"Caio",5000),
        array(3,"Kayo",5000) 

    );

    
    print_r($func);*/
?>