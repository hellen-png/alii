<?php
function contardivisores() {
    $contagem = 0;

    $limite=(int)readline("digite um numero:");

    for ($i = 1; $i <= $limite; $i++) {
        if ($limite % $i == 0) {
            $contagem++; 
        }
    }

    return $contagem;
}

echo contarDivisores(); 
?>