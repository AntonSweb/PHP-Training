<?php
/**
 * Найдите сумму и произведение элементов массива. Реализовать двумя способами: с помощью стандартных функций и без.
 */

$mass = array(2, 30, 4, 10, 50, 8, 6, 4, 2, 11);
$sum_mass = array_sum($mass);
$com_mass = array_product($mass);
$sum = 0;
$com = 1;
for ($i = 0; $i < count($mass); $i++) {
  $sum = $sum + $mass[$i];
  $com = $com * $mass[$i];
}

print_r($mass);
echo "<br />"."<br />"."Sum: ".$sum;
echo "<br />"."<br />"."Произведение: ".$com;
echo "<br />"."<br />"."Sum: ".$sum_mass;
echo "<br />"."<br />"."Произведение: ".$com_mass;
