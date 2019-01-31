<?php
for ($i = 0; $i <= 1000; $i+=5) {

    // Se o if tiver só uma instrução não precisa colocar chaves
    if($i >= 200 && $i <= 800) continue;
    if($i === 900) break;

    echo "$i <br>";
}