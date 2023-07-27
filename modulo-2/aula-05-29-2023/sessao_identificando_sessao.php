<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão de usúario- identificando uma sessão</title>
</head>
<body>
    <?php 
    
    session_start();

    $_SESSION['nome'] = 'usuário';

    ?>
    
</body>
</html>