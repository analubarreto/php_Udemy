<?php 

// string de conexão dizendo o tipo de banco, o nome do banco e a onde conectar
// connectionPooling é para dizer se a pessoa vai usar o pool de conexão ou não, no caso do SQLEXPRESS não precisa e não deve
$conn = new PDO("sqlsrv:DataBase=dbphp7; server=localhost\SQLEXPRESS;coonectionPooling=0", "root", "15926535!Pi");

// PDO permite você trabalhar com transações
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY des_login");

$stmt->execute();

// fatia todas as linhas, fazendo o que o while fazia no mysqli
$results = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($results as $row) {

    foreach ($row as $key => $value) {
        echo "<strong>".key."</strong>".$value."<br/>";
    }

}