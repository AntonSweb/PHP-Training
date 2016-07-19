<?php
/**
 * Определите, есть ли в массиве повторяющиеся элементы.
 */

$array = array(2, 30, 4, 10, 50, 8, 6, 4, 2, 10);
print_r($array);
$n = 0;
$array_count = array_count_values($array);
echo "<br />";
foreach($array_count as $key => $value){
//  echo "$key: $value";echo "<br />";
  if ($value > 1) {
    $n++;
  }
}

if ($n == 0) {
  echo "<br />"."Повторяющихся елементов нет!";
} else {
  echo "<br />"."Количество повторяющихся елементов: ".$n;
}