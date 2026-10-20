<?php
$vendas = explode(",", readline("Digite o valor das vendas para os 5 dias, separados por vírgula: "));
$total = 0;

for ($i = 0; $i < 5; $i++) {
    $dia = $i + 1;
    echo "Dia {$dia}: {$vendas[$i]}\n";
    $total += $vendas[$i];
}

echo "Total vendido: {$total}\n";
?>
