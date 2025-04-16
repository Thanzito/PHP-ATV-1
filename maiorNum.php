<?php

function maiorNumero($array) {
    return max($array);
}

$numeros = [10, 25, 3 , 47, 18];
echo "Maior número: " . maiorNumero($numeros) . "<br>";