<?php
// Quando dá um erro, o erro não necessariamente está no arquivo que está sendo chamado
// O include tem mais recursos, ele pode trazer arquivos do include path (uma pasta que você pode configurar), se não existir o diretório, ele vai lá nesse diretório e traz de lá. Isso é bom para projetos intranet
// Include remote é um RISCO do INCLUDE porque ele permite que você traga arquivo de outro domínio

// include "exemplo-2.php";

// A diferença entre o include e require é que o require obriga que o arquivo exista e que ele esteja funcionando corretamente e o include não
// BOA PRÁTICA: usar require
require "exemplo-1.php";

// Para evitar chamar o arquivo mais de uma vez, ele ignora a segunda chamada
// A partir do php7, os erros não geram errros fatais (não interrompem a execução), eles geram uma exceção que pode ser tratado com TRY/CATCH
require_once("exemplo-1.php");

$resultado = somar(10, 20);
echo $resultado;