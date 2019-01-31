<?php
// Não necessariamente uma regra de negócio será resolvida com um if
// else if também pode ser escrito como elseif, não existe diferença de performance

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

// Operador ternário: pode ser utilizado quando você tem uma condição simples
echo "<br>";

echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";