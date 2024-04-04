<?php
$start = 2;
$end = 10;
for($i = $start; $i <= $end; $i++){
    $isPrime = true;
    for($j = 2; $j <= sqrt($i); $j++){
        if($i % $j == 0){
            $isPrime = false;
            break;
        }
    }
    echo ($isPrime ? $i  . "<br>" : "");
}

?>