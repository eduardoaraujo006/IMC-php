<!DOCTYPE html>
<html lang="br">
<head>
    <form action="" method="post">
        Digite seu peso: <input type="int" name="peso"/>
        Digite sua altura: <input type="int" name="altura"/><br><br>
        <button type="submit" name="bnt">Enviar</button><br><br>
    </form>
    <title>IMC</title>
</head>
</html>

<?php
include ("IMC_Func.php");
if (isset($_POST["bnt"])){
    echo ("Seu IMC é: ".IMC($_REQUEST["peso"], $_REQUEST["altura"]));
    echo nl2br("\n");
    echo nl2br("\n");
    echo PesoIdeal($_POST["altura"], IMC($_REQUEST["peso"], $_REQUEST["altura"]));
    }
?>