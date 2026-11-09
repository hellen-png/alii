<?php
$numeros = [67,42,14,15,26,5,4,13,22,640];

$maior = $numeros [0];
$menor = $numeros [0];
foreach ($numeros as $num) {

    if ($num > $maior) {
        $maior = $num;
    }
    
    if ($num < $menor) {
        $menor = $num;
    }
}
echo "O maior valor encontrado é: " . $maior . "\n";
echo "O menor valor encontrado é: " . $menor . "\n";

?>
