<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário — Unidade Medida</title>
</head>
<body>
    <form method="get">
        <h1>Conversor de Unidades</h1>
        <label for="numQuantidade">Digite uma Quantidade: </label>
        <input type="number" id="numQuantidade" name="numQuantidade" required>
        <br><br>
        <label for="slt-de">De: </label>
        <select name="slt-de" id="slt-de" required>
            <option value="metros">Metro(s)</option>
            <option value="centimetro">Centímetro(s)</option>
            <option value="quilometros">Quilômetro(s)</option>
            <option value="milimetro">Milímetro(s)</option>
        </select>
        <br><br>
        <label for="slt-para">Para: </label>
        <select name="slt-para" id="slt-para" required>
            <option value="metros">Metro(s)</option>
            <option value="centimetro">Centímetro(s)</option>
            <option value="quilometros">Quilômetro(s)</option>
            <option value="milimetro">Milímetro(s)</option>
        </select>
        <br><br>
        <input type="submit" name="Converter" value="Converter">
    </form>
    <br>
    <?php 
        if(isset($_GET['Converter'])){
            include "conversor.php";
            $resultado = new Conversor;
            $resultado->setNumero($_GET['numQuantidade']);
            $resultado->setDe($_GET['slt-de']);
            $resultado->setPara($_GET['slt-para']);
            $resultado->calcular();
        
    
    ?>
    <input type="number" readonly value="<?php echo $resultado->getResultado();?>">
    <p><?php 
        echo $resultado->getNumero() ." ".$resultado->getDe()." equivale a ".$resultado->getResultado()." ".$resultado->getPara();
    }
    ?></p>
    
</body>
</html>