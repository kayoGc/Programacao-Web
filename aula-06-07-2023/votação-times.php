<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual o melhor time?</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="grupo1">
        <h1>Qual o melhor time do Brasil?</h1>
        <form action="votou.php" method="post">
            <div class="grupo2">
                <div class="form-check">
                    <label for="opção1" class="form-check-label">
                        <img src="imgs/palmeiras.png" class="imagem" alt="Logo palmeiras">
                        Palmeiras
                    </label>
                    <input value="Palmeiras" type="radio" class="form-check-input" name="times" id="opção1">
                </div>

                <div class="form-check">
                    <label for="opção2" class="form-check-label">
                        <img src="imgs/santos.png" class="imagem" alt="Logo palmeiras">
                        Santos
                    </label>
                    <input value="Santos" type="radio" class="form-check-input" name="times" id="opção2">
                </div>

                <div class="form-check">
                    <label for="opção3" class="form-check-label">
                        <img src="imgs/corinthians.png" class="imagem" alt="Logo palmeiras">
                        Corinthians
                    </label>
                    <input value="Corinthians" type="radio" class="form-check-input" name="times" id="opção3">
                </div>

                <div class="form-check">
                    <label for="opção4" class="form-check-label">
                        <img src="imgs/sao-paulo.png" class="imagem" alt="Logo palmeiras">
                        São Paulo
                    </label>
                    <input value="São Paulo" type="radio" class="form-check-input" name="times" id="opção4">
                </div>
            </div>

            <input type="submit" id="votar" class="btn btn-primary" value="Votar">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>