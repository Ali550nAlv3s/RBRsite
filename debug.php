<?php
include 'conn.php';

echo"<h1> Disgnóstico de Conexão com o Banco de Dados </h1>";

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1'){ 
    echo "<p style='color: blue;'><strong>Ambiente Detectado:</strong> LOCAL (Seu PC)</p>";
} else {
    echo "<p style='color: green;'><strong>Ambiente Detectado:</strong> PRODUÇÃO (Hostinger)</p>";
}

if ($conn->connect_error) {
    echo "<p style='color: red;'><strong>Status:</strong> Erro ao conectar!</p>";
    echo "erro: " . $conn->connect_error;
} else {
    echo "<p style='color: darkgreen;'><strong>Status:</strong> Conectado com Sucesso!</p>";
    echo "Banco de dados ativo: " . $dbname;
}
?>