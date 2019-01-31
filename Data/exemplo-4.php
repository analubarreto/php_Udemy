<?php

// A classe date-time tem mais funções que as funções, além de ter a possibilidade de validar que você está esperando uma classa date-time
// Toda vez que você for manipular data é preferível que você utilize essa classe, uma vez que você tirou uma cópia da date-time, ele armazena essa informação, fica mais prática para trabalhar

$dt = new DateTime();

// data atual, -> é usado para acessar um método de uma classe
echo $dt->format("d/m/Y H:i:s");