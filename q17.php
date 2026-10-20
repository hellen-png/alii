<?php
$numero = (int) readline("Digite um número para ver seus múltiplos positivos: "); 

echo "Os 10 primeiros múltiplos positivos de $numero são:\n";
for ($i = 1; $i <= 10; $i++) {
    $multiplo = $numero * $i;
    echo $multiplo . " ";
}
?>
