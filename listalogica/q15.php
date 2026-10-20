<?php

$numero = (int) readline("Digite um número para ver sua tabuada: "); 

echo "Tabuada do $numero:\n";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}

?>