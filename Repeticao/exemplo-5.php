<?php
// While é muito utilizado para pegar dados no banco de dados

$condicao = true;

while ($condicao) {
    // de que númerp a que número ele vai randerizar
    $numero = rand(1, 10);

    if ($numero === 3) {
        echo "TRÊS!!!";
        $condicao = false;
    }

    echo $numero . " ";
}