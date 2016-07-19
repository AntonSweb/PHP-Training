<?php
/**
 * Дан массив из n элементов. а) Переставьте его элементы случайным образом.
 * б) Переставьте его элементы случайным образом так,
 * чтобы каждый элемент оказался на новом месте.
 */
$mass = range(1, 10, 1);
print_r($mass);
echo '<br />';
$j = rand(0, count($mass)-1);

// a)
for ($i = 0; $i < count($mass); $i++){
  $x = $mass[$i];
  $mass[$i] = $mass[$j];
  $mass[$j] = $x;
}
echo '<br />';
print_r($mass);
echo '<br />';

// b)
for ($i = 0; $i < count($mass); $i++) {
  if ($i != $j) {
    $y = $mass[$i];
    $mass[$i] = $mass[$j];
    $mass[$j] = $y;
  }
}
echo '<br />';
print_r($mass);
