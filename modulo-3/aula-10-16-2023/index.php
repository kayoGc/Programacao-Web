<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da Memória</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Jogo da Memória</h1>
    <?php 
        include_once 'jogo-memoria-2.php';
        $opa = new JogoDaMemoria2;
        echo $opa->opa();
    ?>
    <form>
        <button type="submit">oi</button>
    </form>

</body>
</html>