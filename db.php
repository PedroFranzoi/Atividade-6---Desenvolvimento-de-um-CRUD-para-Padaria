<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bumba_meu_pao_testes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexao falhou: " . $conn->connect_error);
}
