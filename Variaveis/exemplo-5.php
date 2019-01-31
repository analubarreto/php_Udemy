<?php
// Quando a gente cria uma variável, ela só existe naquele arquivo, o que é diferente de uma variável de sessão que pode ser vista em várias páginas

$nome = "Ana Luiza";

function teste() {
    // variáveis do lado de fora da função só serão vistas se declaradas ao lado de global
    global $nome;
    echo $nome;
}

function teste2() {
    // a variável mesmo tendo o mesmo nome, será uma variável diferente, para que elas tenham a mesma informação, temos que usar a keyword "global"
    $nome = "João";
    echo $nome . " agora no teste 2";
}

teste();
echo "</br>";
teste2();