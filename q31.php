<?php
$totalModelos = readline("Qtd modelos: ");
$totalTestes = readline("Qtd testes: ");

$maiorMedia = 0;
$melhorModelo = 0;

for ($m = 1; $m <= $totalModelos; $m++) {
    $soma = 0;

    for ($t = 1; $t <= $totalTestes; $t++) {
        $nota = readline("Mod $m - Teste $t: ");

        if ($nota < 50) {
            echo "-> Baixo\n";
        } elseif ($nota < 80) {
            echo "-> Moderado\n";
        } else {
            echo "-> Alto\n";
        }

        $soma += $nota;
    }

    $media = $soma / $totalTestes;
    echo "Media Mod $m: $media\n\n";

    if ($media > $maiorMedia) {
        $maiorMedia = $media;
        $melhorModelo = $m;
    }
}

echo "Melhor modelo: Mod $melhorModelo (Media: $maiorMedia)\n";
?>
