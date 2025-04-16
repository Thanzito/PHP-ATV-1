<?php

//Pode ser feito sem declarar uma função, apenas com if e else

function verificaparouimpar($numero)
{   if ($numero % 2 == 0) {
    echo "O número é par";
} else {
    echo "O número é impar";
}
}
echo verificaparouimpar(10);