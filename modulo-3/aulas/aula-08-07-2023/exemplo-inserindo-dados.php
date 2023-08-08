<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário inserindo dados em uma tabela</title>
  <link rel="stylesheet" href="../../tailwindcss/output.css">
</head>

<body class="bg-gray-900">
  <form action="inserir-dados.php" method="post" class="flex flex-col w-screen h-screen justify-center items-center space-y-20 space-y-reverse">
    <h1 class="text-green-600 py-5 text-4xl">Login</h1>
    <div class="flex flex-col text-lg py-5 px-5 rounded shadow space-y-3 bg-gray-200">
      <div class="flex">
        <div class="flex flex-col space-x-5 space-x-reverse space-y-3">
          <span class="" for="nome">Nome:</span>
          <span>Sobrenome:</span>
          <span>Idade:</span>
        </div>
        <div class="flex flex-col space-y-3">
          <input class="focus:outline-none rounded px-2 focus:ring" 
          id="nome" name="nome" placeholder="Nome" type="text">
          <input class="focus:outline-none rounded px-2 focus:ring" 
          name="sobrenome" placeholder="Sobrenome" type="text">
          <input class="focus:outline-none rounded px-2 focus:ring" 
          name="idade" placeholder="idade" type="number">
        </div>
      </div>
      <div class="mx-auto space-x-5">
        <input class="py-1 px-2 bg-yellow-400 rounded text-yellow-800" 
        type="submit" value="Logar">
        <a href="#">Cadastrar</a>
      </div>

    </div>
  </form>
</body>

</html>