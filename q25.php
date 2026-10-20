<?php
$soma = 0;
$maior = 0;

for ($i = 1; $i <= 7; $i++) {
    $temp = readline("Dia $i: ");
    
    $soma += $temp;
    
    if ($temp > $maior) {
        $maior = $temp;
    }
}

echo "Media: " . ($soma / 7) . "\n";
echo "Maior: " . $maior . "\n";
