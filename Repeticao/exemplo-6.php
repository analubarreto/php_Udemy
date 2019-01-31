<?php
// O Do/While executa pelo menos uma vez mesmo que a condição seja falsa

$total = 150;
$desconto = 0.9;

do {
  $total *= $desconto;
} while ($total > 100);

echo $total;