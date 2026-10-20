<?php
$valor = readline("Digite o valor que deseja sacar (R$): ");

$notas10 = 0;
$notas2 = 0;
$sobra = $valor;

for ($i = $sobra; $i >= 10; $i -= 10) {
    if (($sobra - 10) != 1) {
        $notas10++;
        $sobra -= 10;
    }
}
for ($i = $sobra; $i >= 2; $i -= 2) {
    $notas2++;
    $sobra -= 2;
}

if ($sobra == 0 && $valor > 0) {
    echo "Saque realizado com sucesso!\n";
    echo "Notas de R$ 10,00: " . $notas10 . "\n";
    echo "Notas de R$ 2,00: " . $notas2 . "\n";
} else {
    echo "O saque não pode ser realizado com o valor exato com as notas disponíveis.\n";
}
?>
