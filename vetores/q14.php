<?php
$numeros =[13,24,35,46,57,68,79,80,12,23,34,45,56,67,78,89,90];

$maior = 0;
$segundoMaior = 0;

foreach ($numeros as $num) {
    if ($num > $maior) {
        $segundoMaior = $maior;
        $maior = $num;
    }
    
    if ($num > $segundoMaior && $num < $maior) {
        $segundoMaior = $num;
    }
}

echo "O maior numero eh: " . $maior . "\n";
echo "O segundo maior eh: " . $segundoMaior . "\n";
?>