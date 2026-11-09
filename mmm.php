<?php
function perfeito() {
    $n=(int)readline("digite um numero:");
    $soma = 0;
    $i = 1;

    while ($i < $n) {
        if ($n % $i == 0) {
            $soma += $i;
        }
        $i++;
    }

    if ($soma == $n) {
        echo "O numero $n e perfeito!\n";
    } else {
        echo "O numero $n nao e perfeito.\n";
    }
}

perfeito(); 
?>