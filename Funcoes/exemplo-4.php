<?php
function ola() {
    // vai retornar todos os arumentos passados para essa função
    $argumentos = func_get_arg(ola());

    return $argumentos;
}

var_dump(ola("Bom dia!", 10));