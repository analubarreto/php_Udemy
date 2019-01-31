<?php
// Funções anônimas: não tem nome, nem return
// Colocar uma função dentro de uma variável

$fn = function($a) {
    var_dump($a);
};

$fn("oi");