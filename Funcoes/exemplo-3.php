<?php

// quando você coloca uma igualdade no parâmetro, o php trata come default
function ola($texto = "mundo", $periodo = "Bom dia") {
    return "Olá $texto, $periodo! <br>";
}

echo ola("Mundo");
echo ola("", "Boa");
echo ola("Ana", "Boa tarde");
echo ola("Bruno", "Boa noite");