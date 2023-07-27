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

    <div class="grupo1">
        <h1> 
        <?php 
            if(isset($_COOKIE['votou'])) {
                $timeVotado = "pare";
                print("Você já votou antes!");
            } else {
                $timeVotado = $_POST["times"];
                print("Você votou no $timeVotado");
                setcookie('votou', 'sim');
            }
        ?>!</h1>
        <label id="timeVotado" hidden><?php echo $timeVotado;?></label>
        <div id="imagem"></div>
    </div>
    

    <script src="js/script.js"></script>
</body>

</html>