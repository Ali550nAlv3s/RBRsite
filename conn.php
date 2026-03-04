<?php

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1'){ 

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "regularbr_bd";

} else {

$servername = "localhost";
$username = "u863251032_root";
$password = "@Jbeyl+Ur8";
$dbname = "u863251032_regularbr_bd";

}

// Criar Conexão
$conn = new mysqli($servername, $username, $password);

// Checar Conexão
if ($conn->connect_error) {
    die("Falha na conexão:: " . $conn->connect_error);
}

/* 

A partir daqui é a verificação das tabelas 

*/

 $sqlCriarBanco = "CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";


    if (!$conn->query($sqlCriarBanco)) {
        die("Erro ao Criar o bano: " . $conn->error);
    }

$conn->select_db($dbname);

 $sqlColaboradores = 'CREATE TABLE IF NOT EXISTS rbr_colaboradores (
     id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150),
    telefone VARCHAR(20),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4';


    if (!$conn->query($sqlColaboradores)) {
        die("Erro ao criar a tabela usuarios!" . $conn->error);
    }
?>


