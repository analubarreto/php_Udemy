<?php
$a = NULL;
$b = NULL;
$c = 10;

// verificar se essas variáveis são nulas ou não, se uma das variáveis antes do C forem não nulas, o comando para naquela variável não nula
echo $a ?? $b ?? $c;