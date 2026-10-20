<?php
$somaPares = 0;
$somaImpares = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo $i . " é PAR\n";
        $somaPares += $i;
    } else {
        echo $i . " é ÍMPAR\n";
        $somaImpares += $i;
    }
}

echo "Soma de todos os pares: " . $somaPares . "\n";
echo "Soma de todos os ímpares: " . $somaImpares . "\n";
?>
