<?php
// com o return você tem mais liberdade do que fazer com a função
function ola() {
    return "Olá mundo! <br>";
}

echo ola();
$frase = ola();

echo strlen($frase);