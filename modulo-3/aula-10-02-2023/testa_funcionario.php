<?php 
    include_once 'funcionario.php';
    
    //instancia novo Funcionario
    $funcionario = new Funcionario($_GET['codigo'], $_GET['nome'], $_GET['data'], $_GET['salario']);
    $infoFun = $funcionario->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste funcionário</title>
</head>
<body>
    <h1>Funcionario <?php echo $infoFun['nome'] ?></h1>
    <p>Codigo: <?php echo $infoFun['codigo']  ?></p>
    <p>Nome: <?php echo $infoFun['nome']  ?></p>
    <p>Data nascimento: <?php echo $infoFun['dataNascimento']?></p>
    <p>Salario: R$ <?php echo $infoFun['salario']  ?></p>

</body>
</html>