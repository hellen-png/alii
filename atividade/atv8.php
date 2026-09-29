<?php
$valorSaque = 256;
$saquevalido = true;
$cedulas = [100, 50, 10, 5, 1];
$resto = $valorSaque;

for ($i = 0; $i < 5; $i++) {
    $nota = $cedulas[$i];
    $qntd = 0;

    while ($resto >= $nota) {
        $resto -= $nota;
        $qntd++;
    }

    echo "Cédulas de R$ $nota: $qntd <br>";
}
?>
