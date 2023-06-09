<?php 

define ("PI", 3.141592);

$raio = 2; 

$area = 4 * PI * ($raio * $raio);

$volume = (4/3) * PI * ($raio * $raio * $raio);

echo "Área da esfera: " . number_format($area, 2) . "<br>";
echo "Volume da esfera: " . number_format($volume, 2) . "<br>";
?>