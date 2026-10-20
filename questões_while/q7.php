<?php
$somanotas = 0;
$alunos = 1;
while ($alunos <= 5) {
    $nota = readline("Digite a nota do aluno $alunos: ");
    $somanotas += $nota;
    
    $alunos++;
}
    echo "A soma das notas dos alunos é: $somanotas\n";



?>