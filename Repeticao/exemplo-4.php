<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Ok">
</form>

<?php

if (isset($_GET)) {
    // $key é a chave do array que o GET buscar, o que a pessoa digitou em cada um desses campos, virá em value
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: $key <br>";
        echo "Valor do campo: $value <br>";
        echo "<hr>";
    }
}



?>