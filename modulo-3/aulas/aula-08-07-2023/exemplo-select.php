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
        $sql = "SELECT nome, sobrenome FROM pessoa";

        $resultado = mysqli_query($con, $sql);

        echo "<h2>pessoas</h2>";

        while ($pessoa = mysqli_fetch_array($resultado)) {
            echo $pessoa['nome'] . ' ' . $pessoa['sobrenome'] . "<br><br>";
            
        }
        mysqli_close($con);
    }
    ?>
</body>

</html>