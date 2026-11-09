<?php
$numeros =[1,2,3,4,5,6,7,8,9,12,13,14,24,35,46,68,79];
$distintos = [];

foreach ($numeros as $num) {
    $jaExiste = false;
    
    foreach ($distintos as $d) {
        if ($d === $num) {
            $jaExiste = true;
            break;
        }
    }
    
    if (!$jaExiste) {
        $distintos[] = $num;
    }
}

print_r($distintos);
?>