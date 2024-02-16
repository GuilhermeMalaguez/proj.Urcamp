<?php

session_start();

if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    echo "Campos de usuário e senha são obrigatórios.";
   
}

include('config.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

echo "Usuário: $usuario, Senha: $senha";

$sql = "SELECT * FROM usuarios WHERE nome = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $senha_hash = $row["senha"];

    if (password_verify($senha, $senha_hash)) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row["nome"];
        header("Location: novotime.php");
        exit;
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

$stmt->close();
$conn->close();
?>
