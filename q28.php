<?php
$pequenos = 0;
$medios = 0;
$grandes = 0;

for ($i = 1; $i <= 10; $i++) {
    $peso = readline("Digite o peso médio do lote $i (em gramas): ");

    // Classifica o lote de acordo com o peso
    if ($peso < 100) {
        echo "Lote $i: Pequeno\n";
        $pequenos++;
    } elseif ($peso <= 200) {
        echo "Lote $i: Médio\n";
        $medios++;
    } else {
        echo "Lote $i: Grande\n";
        $grandes++;
    }
}

echo "Lotes pequenos: " . $pequenos . "\n";
echo "Lotes médios: " . $medios . "\n";
echo "Lotes grandes: " . $grandes . "\n";
?>
