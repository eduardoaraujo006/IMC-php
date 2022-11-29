<!DOCTYPE html>
<html lang="br">
<head>
    <form method="post">
        Digite seu peso: <input type="int" name="peso"/>
        Digite sua altura: <input type="int" name="altura"/><br><br>
        <button type="submit" name="bnt">Enviar</button><br><br>
    </form>
    <title>IMC</title>
</head>
</html>

<?php
include ("IMC_Func.php");
$peso = $_REQUEST["peso"];
$altura = $_REQUEST["altura"];

if (isset($_REQUEST["bnt"])){
    echo ("Seu IMC é: ".IMC($peso, $altura));
    echo nl2br("\n");
    echo nl2br("\n");
    echo PesoIdeal($altura, IMC($peso, $altura));
}
?>