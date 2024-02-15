async function cadastrarTime() {
  const nomeTime = document.getElementById('nomeTime').value;

  if (nomeTime.trim() === '') {
    alert('O nome do time é obrigatório.');
    return;
  }

  try {
    const response = await fetch('config.times.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `nomeTime=${nomeTime}`,
    });

    if (response.ok) {
      try {
        const resultado = await response.json();

        if (resultado && resultado.mensagem) {
          alert(resultado.mensagem);

          // Se o cadastro foi bem-sucedido, recarregue a lista de times
          obterListaTimes();
          document.getElementById('nomeTime').value = '';
        } else {
          console.error('Resposta do servidor não contém JSON válido:', resultado);
          alert('Erro inesperado na resposta do servidor. Verifique o console para mais detalhes.');
        }
      } catch (jsonError) {
        console.error('Erro ao processar JSON:', jsonError);
        alert('Erro inesperado ao processar a resposta do servidor. Verifique o console para mais detalhes.');
      }
    } else {
      const errorText = await response.text();
      alert(`Erro ao cadastrar o time. Detalhes: ${errorText}`);
    }
  } catch (error) {
    console.error('Erro durante a requisição AJAX:', error);
    alert('Erro inesperado durante a requisição AJAX. Verifique o console para mais detalhes.');
  }
}

