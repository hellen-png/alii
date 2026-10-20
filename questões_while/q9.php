<?php
$numeros = (int)readline("Escolha um numero: ");  
$soma = 0;

while ($numeros != 0) {

    $soma += $numeros;
    $numeros = (int)readline("Escolha outro numero ou 0 para encerrar: ");
    
    if ($numeros == 0) {
        echo "A soma dos valores informados é: " . $soma . "\n";
    }
}
?>