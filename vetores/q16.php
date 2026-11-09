<?php
$numeros =[1,23,34,45,56,78,9,0,2,3,4,5,6,36,71,94];

echo "Numeros primos encontrados:\n";

foreach ($numeros as $num) {
    if ($num <= 1) {
        continue;
    }

    $divisores = 0;

    
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisores = $divisores + 1; 
        }
    }
    if ($divisores == 2) {
        echo "- " . $num . "\n";
    }
}
?>
