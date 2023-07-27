function verificarImagem() {
    let imagem = document.getElementById("imagem");
    let timeVotado = document.querySelector("label#timeVotado").textContent.toLowerCase();

    console.log(timeVotado)

    imagem.innerHTML = `<img src='imgs/${timeVotado}.png' class='imagem'>`;
} 