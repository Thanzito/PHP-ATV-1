<?php

$num1 = 7;
$num2 = 9;
$num3 = 5;

$media = ($num1 + $num2 + $num3) /3;

if ($media >= 7){
    echo "Você está aprovado";
} elseif($media >= 5 && $media<7){
    echo "Você está em recuperação";
} else{
    echo "Você está reprovado";
}