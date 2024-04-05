<?php
$fruits = [
    "pomarancza",
    "banan",
    "jablko",
    "gruszka",
    "arbuz",
    "pomidor",
];
foreach ($fruits as $s) {
    for($i = strlen($s); $i > 0; $i--){
        echo $s[$i-1];
    }
    echo (substr($s, 0, 1) == "p") ? " - TRUE" : " - FALSE";
    echo "<br>";
}
?>