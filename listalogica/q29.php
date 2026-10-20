<?php
for ($i = 1; $i <= 8; $i++) {
    $valorCompra = readline("Digite o valor da compra do pedido $i (R$): ");

    if ($valorCompra >= 300) {
        $frete = 0;
        echo "Pedido $i: Frete GRÁTIS\n";
    } elseif ($valorCompra >= 150) {
        $frete = 15;
        echo "Pedido $i: Frete de R$ 15,00\n";
    } else {
        $frete = 25;
        echo "Pedido $i: Frete de R$ 25,00\n";
    }
}
?>
