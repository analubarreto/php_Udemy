<?php
$empresa = "Hcode";

// Faz a substituição de certos caracteres
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;