<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário — Unidade Medida</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Conversor de Unidades</h1>
    <form method="get">
        <div class="formulario">
        <div class="labels">
        <label for="numQuantidade">Digite uma Quantidade: </label>
        <label for="slt-de">De: </label>
        <label for="slt-para">Para: </label>
        </div>
        
        <div class="inputs">

        
        <input type="number" value="<?php
                                    if (isset($_GET['Converter'])) echo $_GET['numQuantidade'];
                                    ?>" id="numQuantidade" name="numQuantidade" step="0.01" required>
        
        <select name="slt-de" id="slt-de" required>
            <option <?php // esssa besteira é para o select permanecer no mesmo apos converter
                    if (isset($_GET['Converter']) && $_GET['slt-de'] == 'metro(s)') echo 'selected="selected"';
                    ?> value="metro(s)">Metro(s)</option>
            <option <?php
                    if (isset($_GET['Converter']) && $_GET['slt-de'] == 'centímetro(s)') echo 'selected="selected"';
                    ?> value="centímetro(s)">Centímetro(s)</option>
            <option <?php
                    if (isset($_GET['Converter']) && $_GET['slt-de'] == 'quilometro(s)') echo 'selected="selected"';
                    ?> value="quilometro(s)">Quilômetro(s)</option>
            <option <?php
                    if (isset($_GET['Converter']) && $_GET['slt-de'] == 'milimetro(s)') echo 'selected="selected"';
                    ?> value="milimetro(s)">Milímetro(s)</option>
        </select>
        <br><br>
        <select name="slt-para" id="slt-para" required>
            <option <?php
                    if (isset($_GET['Converter']) && $_GET['slt-para'] == 'metro(s)') echo 'selected="selected"';
                    ?> value="metro(s)">Metro(s)</option>
            <option <?php
                    if (isset($_GET['Converter']) && $_GET['slt-para'] == 'centímetro(s)') echo 'selected="selected"';
                    ?> value="centímetro(s)">Centímetro(s)</option>
            <option <?php
                    if (isset($_GET['Converter']) && $_GET['slt-para'] == 'quilometro(s)') echo 'selected="selected"';
                    ?> value="quilometro(s)">Quilômetro(s)</option>
            <option <?php
                    if (isset($_GET['Converter']) && $_GET['slt-para'] == 'milimetro(s)') echo 'selected="selected"';
                    ?> value="milimetro(s)">Milímetro(s)</option>
        </select>
        </div>
        </div>
        <br><br>
        <input type="submit" name="Converter" value="Converter">
    </form>
    </div>
    <br>
    <?php
    if (isset($_GET['Converter'])) {
        include "conversor.php";
        $conversor = new Conversor($_GET['numQuantidade'], $_GET['slt-de'], $_GET['slt-para']);
    ?>
        <input type="number" readonly value="<?php echo $conversor->getResultado(); ?>">
        <p><?php
            echo $conversor->getNumero() . " " . $conversor->getDe() . " equivale a " . $conversor->getResultado() . " " . $conversor->getPara();
        }
            ?></p>
</body>

</html>