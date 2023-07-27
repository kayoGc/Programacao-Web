function opa() {
    let iptQtde = document.querySelector('input#numero')
    let qtde = Number(iptQtde.value)
    let formulario = document.querySelector('form#formulario')
    formulario.innerHTML = ''
    formulario.innerHTML += '<label for="numero">Quantos alunos serão registrados?>'
    formulario.innerHTML += '<input class="form-control" type="number" name="numero" id="numero">'
    formulario.innerHTML += '<input type="button" class="btn btn-primary" value="oi" onclick="opa()"> <br>'
    for (let i = 1; i <= qtde; i++) {
      formulario.innerHTML += `<label>Aluno ${i}: </label> <div class="input-group"> <div class="input-group-prepend"> <span class="input-group-text">Nome e nota</span> </div> <input required id="nome${i}" type="text" class="form-control" name="nome${i}" placeholder="nome" > <input class="form-control" required id="nota${i}" type="number" name="nota${i}" placeholder="nota" >`
    }
    formulario.innerHTML += '<input class="btn btn-primary botoes" type="submit" value="enviar" >'
}   