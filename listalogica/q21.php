<?php
$consumo_diario = explode(",", readline("Digite o consumo diário durante os 7 dias da semana, separe os valores por vírgula: "));
$consumo_total = 0;

for ($i = 0; $i < 7; $i++) {
    $dia = $i + 1;
    echo "Consumo do Dia {$dia}: {$consumo_diario[$i]} litros\n";
    $consumo_total += $consumo_diario[$i];
}

echo "\nConsumo total da semana: {$consumo_total} litros\n";
?>
