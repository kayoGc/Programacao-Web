<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueando páginas por usuário</title>
    <?php 
        session_start();
        
        date_default_timezone_set('America/Sao_Paulo');

        // pega o que foi colocado no formulario 
        $_SESSION['nome'] = $_POST['nome']; 
        $_SESSION['senha'] = $_POST['senha'];
        // -------------------------------------
    ?>
</head>
<body>
    <b>Funcionário: </b> <?php echo $_SESSION['nome']?>, logado com sucesso <br>
    
    <b>Data de conexão: </b> <?php echo date('d/m/Y');?> <br>
           
    <b>Hora de conexão: </b> <?php echo date('H:i:s');?> <br>

    <a href="sessoes_verifica_sessao.php">Área de adiministrador</a>
</body>
</html>