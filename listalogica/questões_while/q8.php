<?php
    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0 - Sair\n";
    $opcao = (int)readline("Escolha uma opção: ");

    if($opcao == 1) {
        echo "você selecionou Cadastrar aluno\n";
    } elseif ($opcao == 2) {
        echo "você selecionou Consultar aluno\n";
    } elseif ($opcao == 3) {
        echo "você selecionou Excluir aluno\n";
} elseif ($opcao == 0) {
    echo "você selecionou Sair\n";
} else {
    echo "Opção inválida\n";
}




?>
