<?php
$numeros =[6,3,8,1,4,9,3,5,2,10,7];

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 9; $j++) {
            if ($numeros[$j] > $numeros[$j + 1]) {
            $copia = $numeros[$j];             
            $numeros[$j] = $numeros[$j + 1];   
            $numeros[$j + 1] = $copia;
        }
        
    }
}

echo "Vetor organizado em ordem crescente:\n";
foreach ($numeros as $num) {
    echo $num . " ";
}
?>
