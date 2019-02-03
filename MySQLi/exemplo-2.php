<?php

// acessar banco de dados
$conn = new mysqli("localhost", "root", "15926535", dbphp7);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY des_login");

// verificar se existe algum dado dentro da variável
// fetch_array vai retornar um array de dados, se eles existirem
// enquanto eu consegui atribuir os resultados à variável row...
// um array vazio no php é FALSE
while ($row = $result->fetch_array()) {
    
}