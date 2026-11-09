<?php
$nomes =["geovanna","lucas", "vitoria" ,"luana" ,"julia" ,"liana", "eva ","lena"];
$pesquisa="geovanna";
foreach($nomes as $nome){
    if($nome===$pesquisa){
    $encotrado = true;
    echo "nome encontrado";             
}else{
    echo "nome nao encontrado";
}

}



?>