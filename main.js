

let times = [];

function cadastrarTime() {
  const nomeTime = document.getElementById('nomeTime').value;

  if (nomeTime.trim() === '') {
    alert('O nome do time é obrigatório.');
    return;
  }

  const novoTime = {
    id: times.length + 1,
    nome: nomeTime
  };

  times.push(novoTime);

  atualizarTabelaTimes();

  document.getElementById('nomeTime').value = '';
}

function editarTime(id) {
  const nomeNovo = prompt('Digite o novo nome do time:');
  if (nomeNovo !== null) {
    const timeEditado = times.find(time => time.id === id);
    timeEditado.nome = nomeNovo;
    atualizarTabelaTimes();
  }
}

function excluirTime(id) {
  if (confirm('Deseja realmente excluir o time?')) {
    times = times.filter(time => time.id !== id);
    atualizarTabelaTimes();
  }
}

function atualizarTabelaTimes() {
  const corpoTabelaTimes = document.getElementById('corpoTabelaTimes');
  corpoTabelaTimes.innerHTML = '';

  times.forEach(time => {
    const linha = document.createElement('tr');
    linha.innerHTML = `
  <td>${time.id}</td>
  <td>${time.nome}</td>
  <td>
    <button onclick="editarTime(${time.id})">Editar</button>
    <button onclick="excluirTime(${time.id})" class="excluir">Excluir</button>
  </td>
;

    `;
    corpoTabelaTimes.appendChild(linha);
  });
}

atualizarTabelaTimes();


console.log("funcionou");
