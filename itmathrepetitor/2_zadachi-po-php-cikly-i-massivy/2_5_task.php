<?php
/**
 * Поменять местами наибольший и наименьший элементы массива.
 */

//$mass = array(1, 2, 3, 0, 5, 10, 8, 6);
$mass = range(1, 20, 1);
print_r($mass);

$min = min($mass);
$max = max($mass);

for ($i = 0; $i < count($mass); $i++) {

  if ($mass[$i] == $min) {
    $mass[$i] = $max;
    $max_i = $i;
  }

  if ($mass[$i] == $max && $i !== $max_i) {
    $mass[$i] = $min;
  }
}
echo "<br />"."<br />";
print_r($mass);