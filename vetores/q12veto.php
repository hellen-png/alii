<?php
$numeros =[1,2,3,4,5,6,7,8,9,10];
$pares = [];
$impares = [];

foreach ($numeros as $num) {
    if ($num % 2 === 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

echo "Pares: " . implode(", ", $pares) . "\n";
echo "Ímpares: " . implode(", ", $impares) . "\n";
?>