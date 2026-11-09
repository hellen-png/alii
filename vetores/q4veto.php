<?php
$notas = [5, 10, 7, 8, 3];
$soma = 0;
foreach ($notas as $not){
    $soma += $not;
}
$media = $soma/5;
echo $media;
?>