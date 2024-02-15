<?php
session_start();

if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
}
?>
    <link rel="stylesheet" href="styledb.css">
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Times</title>
  

</head>
<body>
  <h2 style="text-align: center;">Cadastro de Times</h2>

  <form id="timeForm" class="center-form">
    <label for="nomeTime"> NOME DO TIME:</label>
    <input type="text" id="nomeTime" required>
    <button type="button" onclick="cadastrarTime()" class="salvar">Salvar</button>
  </form>
  
  <h3 class="center-form">Lista de Times</h3>
  <table id="tabelaTimes">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome do Time</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody id="corpoTabelaTimes"></tbody>
  </table>

  <script src="main.js"></script>
</body>
</html>
