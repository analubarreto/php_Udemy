<?php
$meses = array(
    "Janeiro", "Fevereiro", "Março",
    "Maio", "Junho", "Julho",
    "Agosto", "Setembro", "Outubro",
    "Novembro", "Dezembro"
);

// array, dado que você quer do array (pode dar qualquer nome)
foreach ($meses as $mes) {
    echo "O mês é: $mes <br>";
}

echo "<br>";

// array, posição do index, dado que você quer
foreach ($meses as $index => $mes) {
    echo "O mês é: $mes <br>";
    echo "O mês é: $index <br><br>";
}