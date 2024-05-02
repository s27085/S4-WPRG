<?php


function recursive($n){
    if($n <= 1)
    {
        return $n;
    }
    else
    {
        return recursive($n - 1) + recursive($n - 2);
}
}

function iterative($n){
    $a = 0;
    $b = 1;
    $c = 0;
    if($n == 0)
    {
        return $a;
    }
    for($i = 2; $i <= $n; $i++)
    {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    return $b;
}

$n = $_GET['number'];
$timestart = microtime(true);
echo 'Recursive method: ', recursive($n);
$timeend = microtime(true);
$timeRecursive = $timeend - $timestart;
$timestart = microtime(true);
echo '<br>Iterative method: ', iterative($n);
$timeend = microtime(true);
$timeIterative = $timeend - $timestart;
$timeDiff = abs($timeRecursive - $timeIterative);
if ($timeRecursive > $timeIterative)
{
    echo '<br>Iterative method is faster by ', $timeDiff, ' seconds';
}
else
{
    echo '<br>Recursive method is faster by ', $timeDiff, ' seconds';
}
