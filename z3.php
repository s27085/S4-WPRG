<?php
function fibonacci(&$array, $number)
{
    if($number < 0) {
        return "Invalid input";
    } else
    if ($number == 0) {
        $array[0] = 0;
        return 0;
    } else if ($number == 1) {
        $array[1] = 1;
        return 1;
    } else {
        $result = fibonacci($array, $number - 2) + fibonacci($array, $number - 1);
        $array[$number] = $result;
        return $result;
    }
}
function printOddArrayItems($array)
{
    foreach ($array as $key => $value) {
        if($value % 2 != 0) {
            echo $key . ". " . $value . "<br>";
        }
    }
}
$n = 10;
$array = [];
fibonacci($array, $n);
printOddArrayItems($array);
