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
include ("Funções/Include.php");
include ("Funções/FunçãoConexão.php");

$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];

if (isset($_POST["bnt"])){
    
    # Execução MYSQL #

    $stmt = $conn->prepare("SELECT 1 FROM registros WHERE altura = '".$altura."' and 'peso' = '".$peso."' limit 1");
    $stmt->execute();

    if(!$stmt->fetch()){
    $stmt = $conn->prepare ("INSERT INTO registros (altura, peso) VALUES ('".$altura."','".$peso."')");
    $stmt->execute();
        }
        F_ALERTA("Salvo");
    }      
?>