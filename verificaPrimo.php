<?php

function ePrimo($numero) {
    if($numero < 2) return false;
    for($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero & $i == 0) return false;
    }
    return  true;
}
$testes = [2, 3, 4, 5, 10, 13];

foreach ($testes as $n) {
    echo "$n é primo " . (ePrimo($n) ? "Sim" : "Não") . "<br>";
}