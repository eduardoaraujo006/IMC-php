<?php
# Função que calcula o IMC #
function IMC($peso, $altura){
    $IMC = $peso / ($altura ** 2);
    $IMC = round($IMC, 2);
    return $IMC;
}
# Função que calcula a meta de peso (18.69 - 24.99) #
function PesoIdeal($altura, $IMC){
    $IMC = 19;
while ($IMC >= 19 and $IMC <= 25){
    $pesoideal = $IMC * ($altura ** 2);
    $pesoideal = round($pesoideal, 2);
    $IMC = $IMC + 6;}
    return $pesoideal;
}
?>
