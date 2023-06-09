<?php
$a = 10;
$b = 500;
$result = 0;

for($i = $a; $i <= $b; $i +=2){

    if($i % 2 == 0){
        $result += $i;
    }
}

echo "A SOMA DE TODOS OS NÚMEROS PARES DE 10 ATÉ 500: ".$result;
?>