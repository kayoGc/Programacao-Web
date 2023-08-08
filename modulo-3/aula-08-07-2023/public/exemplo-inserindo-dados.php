<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário inserindo dados em uma tabela</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <form action="inserir-dados.php" method="post">
        <div class="bg-gray-900">
            Nome: <input type="text" name="nome">
            Sobrenome: <input type="text" name="sobrenome">
            Idade: <input type="text" name="idade">
            <input type="submit" value="cadastrar">
        </div>
    </form>
</body>

</html>