<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../tailwindcss/output.css">
</head>

<body class="bg-gray-900">
    <form action="inserir-dados.php" method="post" class="flex flex-col w-screen h-screen justify-center items-center space-y-20 space-y-reverse">
        <h1 class="text-green-600 py-5 text-4xl">Cadastro</h1>
        <div class="flex flex-col text-lg py-5 px-5 rounded shadow space-y-3 bg-gray-200">
            <div>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'teste');

                if (mysqli_connect_errno()) {
                    echo "Erro: " . mysqli_connect_error();
                } else {
                    if(empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['idade'])) {
                        echo "precisa preencher todos os campos para se cadastrar!";
                    } else {
                        $sql = "INSERT INTO pessoa VALUES ('$_POST[nome]', '$_POST[sobrenome]', '$_POST[idade]')";

                        mysqli_query($con, $sql);
    
                        echo "Pessoa cadastrada com sucesso! Agora é só logar";
                    }
                    mysqli_close($con);
                }
                ?>
            </div>
            <div class="mx-auto space-x-5">
                <a href="cadastrar.php">Cadastrar</a>
                <a href="login.php">Logar</a>
            </div>
</body>

</html>