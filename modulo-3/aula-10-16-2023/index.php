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
        include 'jogoMemoria.php';

        $jogo = new JogoMemoria();
        echo $jogo->fazerJogo();
    ?>
</body>
</html>