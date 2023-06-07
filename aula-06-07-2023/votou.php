<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votado!</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body onload="verificarImagem()">
    <?php 
        $timeVotado = $_POST['times'];
    ?>
    <div class="grupo1">
        <h1>Você votou no <?php echo $timeVotado; ?>!</h1>
        <label id="timeVotado"><?php $timeVotado;?></label>
    </div>
    <div id="imagem"></div>

    <script>
    function verificarImagem() {
        let imagem = document.getElementById("imagem");
        let timeVotado = document.querySelector("label#timeVotado").textContent;

        imagem.innerHTML = `<label>a</label>`;
    } 
    </script>
</body>

</html>