<?php
$numero = (int)readline("Digite um número para calcular o fatorial: "); 
$fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}

echo "O fatorial de {$numero} e: {$fatorial}\n";
?>
