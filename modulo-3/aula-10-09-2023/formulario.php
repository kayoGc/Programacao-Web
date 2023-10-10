<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
    <form action="testa_funcionario.php">
    <label for="numero">Codigo</label>
    <input type="number" name="codigo" id ="codigo">
    <br><br>

    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome">
    <br><br>

    <label for="data">Data de nascimento</label>
    <input type="date" id="data" name="data">
    <br><br>

    <label for="salario">Salario</label>
    <input type="number" id="salario" name="salario">
    <br><br>

    <input type="submit" value="Enviar">
    </div>

    </form>
</body>
</html>