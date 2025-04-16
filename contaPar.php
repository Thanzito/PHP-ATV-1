<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = 0;

foreach ($numeros as $num) {
    if($num % 2 == 0) {
        $pares++;
    }
}

echo "Quantidade de pares: $pares<br>";