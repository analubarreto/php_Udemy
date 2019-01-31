<?php
// Funções anônimas: não tem nome, nem return

function test($callback) {
    // Callback é utilizada quando você tem um processo lento que não sabe quando vai terminar
    // Processo lento

    $callback();
}

test(function(){
    echo "Terminou";
});