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
        $fotos = $jogo->getFotos();
    ?>
    <div>
        <?php 
            for ($i = 0; $i < sizeof($fotos) * 2; $i++) {
            $count = 0;
            if ($count == 0) {
        ?>
            <img class="imgTop img<?php echo $i ?>" id="img<?php echo $i ?>" onclick="opaClicou<?php echo $i ?>()" src="img/interrogation.jpeg" alt="interrogação">
        <?php 
            $count++;
            } else {
            ?>
            <img class="imgTop img<?php echo $i - 1 ?>" id="img<?php echo $i ?>" onclick="opaClicou<?php echo $i ?>()" src="img/interrogation.jpeg" alt="interrogação">
            $count--;
        <?php }} ?>
    </div>

    <script>
        <?php 
            $index = 0;
            for ($i = 0; $i < sizeof($fotos) * 2; $i++) {
                $count = 0;
            
        ?>
        function opaClicou<?php echo $i; ?>() {
            let img = document.querySelector('img.img<?php echo $i; ?>');
            img.setAttribute('src', '<?php echo $fotos[$index]; ?>');
        }

        <?php $count++;
              if($count % 2 == 0) $index++;} ?>

    </script>
</body>
</html>