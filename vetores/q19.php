<?php
$vetor1 =[1,2,3,4,5,6,7,8,9];
$vetor2 =[1,23,2,24,5,67,8,9];

$resultado = []; 
foreach ($vetor1 as $num1) {
    
    foreach ($vetor2 as $num2) {
        if ($num1 == $num2) {
            
            $jaExiste = false;
            foreach ($resultado as $res) {
                if ($res == $num1) {
                    $jaExiste = true;
                    break;
                }
            }
            
            if ($jaExiste == false) {
                $resultado[] = $num1;
            }
            
        }
    }
    
}

echo "Numeros que aparecem nos dois vetores (sem repetir):\n";
foreach ($resultado as $final) {
    echo $final . " ";
}
echo "\n";
?>
