<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'db-name');

    if (mysqli_connect_errno()) {
        echo "Erro: " . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO pessoa VALUES ('$_POST[nome]', '$_POST[sobrenome]', '$_POST[idade]')";


        if (mysqli_query($con, $sql)) {
            $resultado = mysqli_query($con, "SELECT * FROM pessoa LIKE %$_POST[name]%");
            $pessoa = mysqli_fetch_array($resultado);
            echo "A pessoa " . $pessoa["nome"] . " " . $pessoa['sobrenome'] . " foi cadastrada";
        } else {
            echo "Erro ao inserir: " . mysqli_error($con);
        }
        mysqli_close($con);
    }

    ?>

    <a href="exemplo-select.php">ver</a>
</body>

</html>