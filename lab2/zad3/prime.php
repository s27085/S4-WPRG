<?php
function isPrime($num, &$iterCounter)
{
    for($i = 2; $i < sqrt($num); $i++){
        $iterCounter++;
        if($num % $i == 0){
            return 0;
        }
    }
    return 1;
}
$num = $_POST['number'];
$iterCounter = 0;
if($num < 2){
    echo "Number is not prime";
    return;
}
echo isPrime($num, $iterCounter) ? "Number is prime" : "Number is not prime";
echo "<p>Number of iterations: $iterCounter</p>";
?>
