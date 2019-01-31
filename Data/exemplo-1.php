<?php

//precisa da parte da data que você quer, essas letras são case senstive
// Y: traz o ano com 4 dígitos
// Sempre vai pegar o endereço do servidor, não é sensitva à função set locale
echo date("d/m/Y H:i:s");

// Quando você coloca como parâmetro o time stump, a hora para naquela determinada hora
echo "<br>";
echo date("d/m/Y H:i:s", 1548973169);

// Times stump: quantidade de segundos desde 1970 até agora
echo "<br>";
echo time();