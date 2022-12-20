<?php
# Função que calcula o IMC #
function IMC($peso, $altura){
    $IMC = $peso / ($altura ** 2);
    $IMC = round($IMC, 2);
    return $IMC;
}
# Função que calcula a meta de peso (18.69 - 24.99) #
function PesoIdeal($altura){
    $pesoideal1 = 18.5 * ($altura ** 2);
    $pesoideal1 = round($pesoideal1, 2);
    # ----------------------------------
    $pesoideal2 = 24.9 * ($altura ** 2);
    $pesoideal2 = round($pesoideal2, 2);
    return $pesoideal1." ". $pesoideal2;
}

# Funções MYSQL #

# Conecxão ao banco de dados #
    try {
    $conn = new PDO('mysql:host=localhost;dbname=imc', 'root', '');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
}
# Mensagem de Alerta #
  function F_ALERTA($SRT){
    echo '<script>alert("'.$SRT.'");</script>';
}
?>
