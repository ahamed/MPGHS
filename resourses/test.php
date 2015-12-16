<?php

$day = 1;
$mon = 1;
$yer = 2015;
$sum = 0;
$days = 0;
$month_day = array(31,28,31,30,31,30,31,31,30,31,30,31);
for ( $i = 0; $i < $mon; $i++){
    $sum += $month_day[$i];
}

$days = $sum - ($month_day[$mon-1] - $day);
echo "$days";



?>
