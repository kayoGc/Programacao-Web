<?php 
    include 'gorjeta.php';
    if (isset($_GET['valor'])) {
        $gorjeta = new Gorjeta($_GET['valor'], $_GET['qualidade']);
        define('gorjeta', $gorjeta->getGorjeta());
        define('valorTotal', $gorjeta->getValorTotal());
    } else {
        define('gorjeta', 0);
        define('valorTotal', 0);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorjeta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora de Gorjeta</h1>
    <form action="calcular-gorjeta" method="get">
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
    <label for="valorGorjeta">Valor da Gorjeta</label>
    <input type="text" id="valorGorjeta" name="valorGorjeta" value="R$<?=gorjeta?>"readonly>
    <label for="valorTotal">Valor Total</label>
    <input type="text" id="valorTotal" name="valorTotal" value="R$<?=valorTotal?>"readonly>
</body>
</html>