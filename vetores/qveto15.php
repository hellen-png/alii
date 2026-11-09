<?php
$numeros =[3, 5, 3, 8, 5, 3, 9, 8, 5, 2];
$jaMostrados = [];

foreach ($numeros as $num) {

    $jaContou = false;
    foreach ($jaMostrados as $ja) {
        if ($ja == $num) {
            $jaContou = true;
            break;
        }
    }
    if ($jaContou == false) {
        $contador = 0;
        foreach ($numeros as $n) {
            if ($n == $num) {
                $contador = $contador + 1; 
            }
        }

        echo "O numero " . $num . " aparece " . $contador . " vezes.\n";
        $jaMostrados[] = $num;
    }
}
?>
