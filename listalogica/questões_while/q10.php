<?php
$numero_secreto = 67;
$tentativa = (int)readline("Adivinhe o número secreto: ");
do {
    if ($tentativa < $numero_secreto) {
        echo "O número secreto é maior. Tente novamente.\n";
    } else if ($tentativa > $numero_secreto) {
        echo "O número secreto é menor. Tente novamente.\n";
    }
    $tentativa = (int)readline("Adivinhe o número secreto: ");  
    } while ($tentativa != $numero_secreto);
if ($tentativa == $numero_secreto) {
    echo "Parabéns! Você acertou o número secreto.\n";
}
?>