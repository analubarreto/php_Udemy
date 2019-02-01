<?php

spl_autoload_register(function($nameClass){

    $dirClass = "classes"; // diretório
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; // path

    if (file_exists($filename)) {
        require_once($filename);
    }

});