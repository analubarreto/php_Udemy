<?php
// Recuperar ID da sessão
session_id('6tsq26vsu83uo4v8lo9ptvvp6jarray');

require_once ("config.php");

// É para gerar um novo arquivo de sessão mesmo que a pessoa ainda esteja no site
session_regenerate_id();
echo session_id();

var_dump($_SESSION);

// Se o hacker descobre o ID de sessão, ele consegue pegar os valores da sessão do outro usuário
// O https encripta o ID de sessão