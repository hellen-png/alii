<?php
$numeros = [12, 5, 8, 3, 10, 7, 14, 19, 22, 1];

$pares = 0;
$impares = 0;

foreach ($numeros as $num) {

    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "Quantidade de números pares: " . $pares . "\n";
echo "Quantidade de números ímpares: " . $impares . "\n";

?>
