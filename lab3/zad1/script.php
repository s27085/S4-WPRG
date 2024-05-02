<?php
$wholeDate = $_GET['bday'];
$wholeDate = explode("-", $wholeDate);
$year = $wholeDate[0];
$month = $wholeDate[1];
$day = $wholeDate[2];
$dayOfWeek = date("l", mktime(0, 0, 0, $month, $day, $year));
$age = date("Y") - $year;
$tillNextBirthday = time() - mktime(0, 0, 0, $month, $day, date("Y"));
if($month > date('m') || ($month == date('m') && $day > date('d')))
{
    $tillNextBirthday *= -1;
}
$tillNextBirthday = floor($tillNextBirthday / (60 * 60 * 24));
echo 'Day of the week: ', $dayOfWeek;
echo '<br>Age: ', $age;
echo '<br>Days until next birthday: ', $tillNextBirthday;
?>