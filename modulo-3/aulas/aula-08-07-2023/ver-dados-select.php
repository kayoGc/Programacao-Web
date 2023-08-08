<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../tailwindcss/output.css">
</head>

<body class="bg-gray-900">
    <div class="flex flex-col w-screen h-screen justify-center items-center space-y-20 space-y-reverse text-center align-middle">
        <div class="flex flex-col text-lg py-5 px-5 rounded shadow space-y-3 bg-gray-200">
            <div>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'teste');

                if (mysqli_connect_errno()) {
                    echo "Erro: " . mysqli_connect_error();
                } else {
                    $sql = "SELECT * FROM pessoa WHERE nome LIKE '$_POST[nome]'";

                    if (mysqli_query($con, $sql)) {
                        $resultado = mysqli_query($con, $sql);
                        $pessoa = mysqli_fetch_array($resultado);
                        if ($pessoa['nome'] !=  null) {
                            echo "A pessoa " . $pessoa["nome"] . " " . $pessoa['sobrenome'] . " foi logada";
                        } else {
                            echo 'Precisa fazer uma conta';
                        }
                        
                    } else {
                        echo "Erro ao inserir: " . mysqli_error($con);
                    }
                    mysqli_close($con);
                }

                ?>

            </div>
            <div class="mx-auto space-x-5">
                <a href="login.php">Sair</a>
            </div>

        </div>
        </form>
</body>

</html>