const selectNomes = document.getElementById('nomes')
const imagem = document.getElementById('imagem')

selectNomes.addEventListener('change', ({ target }) => {
  const nome = target.value

  const xhr = new XMLHttpRequest()
  xhr.open('POST', 'verificar2.php')
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  xhr.onload = () => {
    if (xhr.status === 200) {
      imagem.src = `${xhr.responseText}`
    } else {
      console.error('Erro ao buscar imagem.')
    }
  }
  xhr.send(`nome=${nome}`)
})
