<?php

echo "ALTURA: 1.69 <br>";
echo "PESO: 52";

$altura = 1.69;
$peso = 52;
echo "<br><br>";
$imc = $peso / ($altura*$altura);
echo "IMC: : ".number_format($imc, 2);
echo "<br>";
?>