<?php
function removerRepetidos() {
    $sequencia = readline("Digite algo: ");
    $nova = [];
    $i = 0;

    while ($i < strlen($sequencia)) {
        if ($i == 0 || $sequencia[$i] != $sequencia[$i - 1]) {
            $nova[] = $sequencia[$i];
        }
        $i++;
    }

    echo implode(" ", $nova);
}

removerRepetidos();
?>