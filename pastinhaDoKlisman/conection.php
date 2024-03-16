<?php
// Configurações de conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bookingstar";

// Conexão com o banco de dados
$connection = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se a conexão foi bem-sucedida
if (!$connection) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Configuração do conjunto de caracteres
mysqli_set_charset($connection, "utf8");

// Retorna a conexão para uso em outros arquivos
return $connection;
?>
