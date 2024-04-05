<?php
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
has been the industry's standard dummy text ever since the 1500s, when an unknown
printer took a galley of type and scrambled it to make a type specimen book. It has survived
not only five centuries, but also the leap into electronic typesetting, remaining essentially
unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
PageMaker including versions of Lorem Ipsum.";
$punctuationMarks = [
    ",",
    ".",
    ";",
    "'"
];
$textArray = explode(" ", $text);
for($i = 0; $i < count($textArray)-1; $i++)
    foreach ($punctuationMarks as $mark){
        if(strpos($textArray[$i], $mark) > 0){
            for($j = $i; $j < count($textArray)-1; $j++){
                $textArray[$j] = $textArray[$j+1];
        }
        array_pop($textArray);
    }
}
$textArrayAssoc = [];
for($i = 0; $i <count($textArray)-1; $i+=2){
    $textArrayAssoc[$textArray[$i]] = $textArray[$i+1];
}
foreach($textArrayAssoc as $key => $value){
    echo $key . " => " . $value . "<br>";
}
