<?php
// o array super-global (ou variável pré-definida), vai ter todas as informações que nós vamos receber da URL, todas as informações vindas pelo GET ou pelo POST virá em forma de string
$nome = $_GET["a"];

// convertendo de string para int
$num = (int)$_GET["b"];

// pegar ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];
// descobrir informações sobre o usuário
$ip1 = $_SERVER["SCRIPT_NAME"];

echo $nome;
echo "</br>";
echo $num;
echo "</br>";
// pega informações do ambiente
echo "ip:" . $ip . " " . $ip1;