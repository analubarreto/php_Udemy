<?php

require_once("config.php");

// usar namespace
use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

echo $cad->registrarVenda();