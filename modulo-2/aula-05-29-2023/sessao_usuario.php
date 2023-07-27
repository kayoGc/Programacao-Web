<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina WEB- Sessão de Usuário</title>
</head>
<body>
    
<?php 
    // session_start(); // inicia sessão

    // $_SESSION['nome'] = "Eugenio"; // fazendo variavel de sessão

    // session_unset();  // apaga as variaveis da sessão mas mantem ela ativa

    // //session_destroy(); // elimina toda a sessão

    session_start();
    
?>
<h3>Sessão de Usúario</h3>
Bem vindo, Sr. <?php echo $_SESSION ['nome']; ?>
</body>
</html> 