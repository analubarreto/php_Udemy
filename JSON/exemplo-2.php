<?php
// Transformar JSON em array

// $json = [{"nome":"Ana","idade":26},{"nome":"Mandachuva","idade":2}];

// O "true" é para não transformar em objeto
$data = json_decode($json, true);

var_dump($data);