<?php
$alunosAcimaDoLimite = 0;

for ($i = 1; $i <= 12; $i++) {
    $faltas = readline("Digite a quantidade de faltas do aluno $i: ");

    if ($faltas <= 15) {
        echo "Aluno $i: Dentro do limite.\n";
    } else {
        echo "Aluno $i: ACIMA DO LIMITE!\n";
        $alunosAcimaDoLimite++; 
    }
}

echo "Quantidade de alunos que ultrapassaram o limite: " . $alunosAcimaDoLimite . "\n";
?>
