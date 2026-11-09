<?php
function fibonacci() {
    $n =(int)readline("digite um numero:");
    $a = 0;
    $b = 1;
    $i = 0;

    while ($i < $n) {
        echo $a . " ";

        $temp = $a + $b;
        $a = $b;
        $b = $temp;

        $i++;
    }
}

fibonacci();
?>        
