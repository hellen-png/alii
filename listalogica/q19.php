<?php
$notas = explode(",", readline("Digite as notas dos 5 alunos, separadas por vírgula: "));
$soma = 0;

for ($i = 0; $i < 5; $i++) {
    $numero_aluno = $i + 1;
    echo "Nota do aluno número {$numero_aluno}: {$notas[$i]}\n";
    $soma += $notas[$i];
}

$media = $soma / 5;
echo "\nMédia da turma: {$media}\n";
?>
