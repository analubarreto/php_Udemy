<?php

$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

// Se não colocar o &, ele só vai alterar dentro do forEach 
foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') $value += 10;

    echo "$value <br>";
}

print_r($pessoa);