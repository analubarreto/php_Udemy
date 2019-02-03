<?php

// acessar banco de dados
$conn = new mysqli("localhost", "root", "15926535", dbphp7);

if ($conn->connect_error) {
    echo "Error: ". $conn->connect_error;
}

// preparar um comando para enviar para o banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES(?, ?)");

// primeiro parâmetro, tipos das interrogações (s de string, sem vírgula)
// segundo parâmetro valores
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

// carrega tudo isso e carrega no banco de dados
$stmt->execute();

// da pra fazer um for inserindo todos os nossos comandos, não precisa ficar repetindo o tempo todo
$login = "root";
$pass = "!@#$%";

$stmt->execute();