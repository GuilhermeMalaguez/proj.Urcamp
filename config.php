<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'banco_dados_login');


$conn = new mysqli(HOST, USER, PASS, BASE);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
