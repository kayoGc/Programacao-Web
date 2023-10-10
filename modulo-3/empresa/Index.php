<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Gorjeta</title>
</head>

<body>
    <h1>Calculadora de Gorjeta</h1>
    <form method="get">

        <label for="valor">
            Valor da conta
        </label>
        <input type="number" id="valor" name="valor" step=".01">
        <label for="qualidade"> Qualidade do Serviço</label>
        <select name="qualidade" id="qualidade">
            <option value="10">Execelente 10%</option>
            <option value="8">Otimo 8%</option>
            <option value="5">Bom 5%</option>
            <option value="2">Ruim 2%</option>

        </select>

        <button type="submit">Calcular Gojeta</button>

    </form>

    <?php 
        include 'gorjeta.php';
        if (isset($_GET['valor'])) {
            $gorjeta = new Gorjeta($_GET['valor'], $_GET['qualidade']);
        }
    ?>

    <label for="valorGorjeta"> Valor da Gorjeta</label>
    <input type="text" id="valorGorjeta" name="valorGorjeta" value="<?php if(isset($_GET['valor'])) echo $gorjeta->getGorjeta();  ?> "readonly>
    <label for="valorTotal"> Valor Total</label>
    <input type="text" id="valorTotal" name="valorTotal" value="<?php if(isset($_GET['valor'])) echo $gorjeta->getValor() + $gorjeta->getGorjeta(); ?>"readonly>


</body>

</html>