<?php
$numeros =[1,2,3,4,5,6,7,8];

echo "Antes: " . implode(" ", $numeros) . "\n";

$copo = $numeros[7];

for ($i = 6; $i >= 0; $i = $i - 1) {
    $numeros[$i + 1] = $numeros[$i];
}

$numeros[0] = $copo;

echo "Depois: ";
foreach ($numeros as $num) {
    echo $num . " ";
}
echo "\n";
?>
