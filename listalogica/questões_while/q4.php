<?php
$numero = (int) readline("Digite um número para ver sua tabuada: ");

$multiplicador = 1;

echo "\nTabuada do $numero:\n";

while ($multiplicador <= 10) {
    $resultado = $numero * $multiplicador;

    echo "$numero x $multiplicador = $resultado\n";
    

    $multiplicador++;
}
?>
