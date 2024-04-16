<?php

session_start();

$nome = $_POST['nome'];

// Conectando ao banco de dados

$conexao = mysqli_connect('localhost', 'root', 'my-secret-pw', 'DB');
// Buscando a imagem
$sql = "SELECT foto_painel FROM tb_preco_97 WHERE modelo = '$nome'";

$resultado = mysqli_query($conexao, $sql);
$imagem    = mysqli_fetch_assoc($resultado)['foto_painel'];

// Fechando a conexão
mysqli_close($conexao);

// Retornando a imagem
header('Content-Type: image/jpeg');
echo $imagem;
