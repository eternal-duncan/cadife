<?php

session_start();

$nome = $_POST['nome'];

// Conectando ao banco de dados

$sqli = new mysqli('localhost', 'root', 'my-secret-pw', 'DB');

// Buscando a imagem
$prepared_sql = $sqli->prepare('SELECT foto_painel FROM tb_preco_97 WHERE modelo = ?');

$nome = $sqli->real_escape_string($nome);

$prepared_sql->bind_param('s', $nome);
$prepared_sql->execute();
$result = $prepared_sql->get_result();

$imagem = $result->fetch_assoc()['foto_painel'];

// Fechando a conexão
$sqli->close();
// Retornando a imagem
header('Content-Type: image/jpeg');
echo $imagem;
