<?php
$senha=1234;
$tentativa = (int) readline("Digite a senha: ");
while($senha != $tentativa){
    echo "Senha incorreta! Tente novamente.\n";
    $tentativa = (int) readline("Digite a senha: ");
}
while ($senha == $tentativa) {
    echo "Senha correta! Acesso concedido.\n";
}

?>