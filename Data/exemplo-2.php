<?php

// converte uma string para o time stump
// $ts = strtotime("2001-09-11");
$ts = strtotime("now");

// o l puxa o dia da semana 
echo date("l, d/m/Y", $ts);