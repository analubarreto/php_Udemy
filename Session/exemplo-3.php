<?php
require_once("config.php");

// ID de sessão, identificador da sessão
// O valor do ID é único entre você e aquele servidor, quando perder a sessão, ele vai criar um novo arquivo com um novo ID
echo session_id();