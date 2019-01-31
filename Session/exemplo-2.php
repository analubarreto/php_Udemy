<?php
require_once ("config.php");

// limpa as variáveis de sessão, se estiver sem parâmetros, ele vai apagar todas as variáveis de sessão, mas o sujeito logado continua sendo o mesmo
session_unset($_SESSION['nome']);

 echo $_SESSION['nome'];

 // limpa as variáveis e tira o usuário
 session_destroy();