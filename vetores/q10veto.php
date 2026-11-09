<?php
$notas = [7.5, 8.0, 5.5, 9.0, 6.0, 8.5, 4.0, 7.0];
$media = array_sum($notas) / count($notas);

echo "Média: $media\n\nNotas acima da média:\n";

foreach ($notas as $nota) {
    if ($nota > $media) {
        echo "- $nota\n";
    }
}
