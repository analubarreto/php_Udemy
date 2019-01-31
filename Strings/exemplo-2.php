<?php
$nome = "ana luiza";
$nome1 = "ANA LUIZA";

echo strtoupper($nome);
echo "</br>";

echo strtolower($nome1);
echo "</br>";

// A primeira letra de cada palavra fica maiuscula
echo ucwords($nome);
echo "</br>";

// Só a primeira letra fica maiúscula
echo ucfirst($nome);
echo "</br>";