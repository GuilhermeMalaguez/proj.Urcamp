<?php

include('config.php');

$nome = $_POST["nome"];
$senha = $_POST["senha"];

// Use password_hash para criar um hash seguro da senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $senha_hash);
$stmt->execute();
$stmt->close();
$conn->close();

// Redirecione ou faça algo após o cadastro
header("Location: index.php");
exit;

?>
