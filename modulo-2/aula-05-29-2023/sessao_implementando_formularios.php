<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão -Implementando os formularios</title>
    <?php 
        if($_POST){
            session_start();
            $_SESSION["nome"] =  $_POST["nome"];
            $_SESSION["senha"] =  $_POST["senha"];

            header("location:sessao_formularios.php");
        }
    
    ?>
</head>
<body>

<form name ="logar" method="post" action="sessao_implementando_formularios.php">
        Nome: <br>
        <input type="text" name="nome"><br>
        Senha: <br>
        <input type="password" name="senha"><br>
        <br>
        <input type="submit" name="enviar" value="Enviar"><br>





</form>
    
</body>
</html>