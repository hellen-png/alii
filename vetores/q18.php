<?php
$nomes = ["Ana", "Bruno", "Carlos", "Diana", "Eduardo", "Fernanda", "Gabriel", "Helena", "Igor", "Julia"];
$notas = [8.5, 6.0, 4.5, 9.0, 7.0, 5.5, 8.0, 6.5, 3.0, 7.5];

$somaNotas = 0;

$maiorNota = 0;
$alunoMaiorNota = "";

$aprovados = 0;


$reprovados = [];

for ($i = 0; $i < 10; $i++) {
    
    $somaNotas = $somaNotas + $notas[$i];

    if ($notas[$i] > $maiorNota) {
        $maiorNota = $notas[$i];
        $alunoMaiorNota = $nomes[$i];
    }


    if ($notas[$i] >= 7) {
        $aprovados = $aprovados + 1;
    } else {
        $reprovados[] = $nomes[$i]; 
    }
}

$mediaTurma = $somaNotas / 10;

echo "Media da turma: " . $mediaTurma . "\n";
echo "Aluno com a maior nota: " . $alunoMaiorNota . " (Nota: " . $maiorNota . ")\n";
echo "Quantidade de alunos aprovados: " . $aprovados . "\n";

echo "Alunos reprovados:\n";
foreach ($reprovados as $reprovado) {
    echo "- " . $reprovado . "\n";
}
?>
