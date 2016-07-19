<?php
/**
 * Дан массив размера n.
 * После каждого отрицательного элемента массива вставить элемент с нулевым значением.
 */

$mass = range(rand(-6, 6), rand(-6, 6), 1);
print_r($mass); echo "<br />"; echo "<br />";

for ($i = 0, $j = 0; $i < count($mass); $i++){

  if ($mass[$i] < 0) {
    $max = $i; //max index of numbers with minus
  } elseif ($mass[$i] !== 0) {
    $plus[$j] = $mass[$i]; // array of a plus number
    $j++;
  }
}

if (isset($max)) {

  if (!empty($plus)) {
    if ($plus[0] % 2 == 0) {
      for ($i = 0; $i < count($mass); $i++) {

        if ($mass[$i] < 0 && $i % 2 == 0) {
          array_splice($mass, $i, 0, 0);
          $max++;
        }
      }
    }
    if ($plus[0] % 2 !== 0) {
      for ($i = 0; $i < count($mass); $i++) {

        if ($mass[$i] < 0 && $i % 2 !== 0) {
          array_splice($mass, $i, 0, 0);
          $max++;
        }
      }
    }
  }

  if (empty($plus)) {
    if ($mass[0] == 0){
      for ($i = 0; $i < count($mass); $i++) {

        if ($i % 2 == 0) {
          array_splice($mass, $i, 0, 0);
          $max++;
        }
      }
    } else {
      for ($i = 0; $i < count($mass); $i++) {

        if ($mass[$i] < 0 && $i % 2 !== 0) {
          array_splice($mass, $i, 0, 0);
          $max++;
        }
      }
    }
  }
  $max++;

  for ($i = 0; $i <= count($mass); $i++) {

    if ($i == $max) {
      array_splice($mass, $max, 0, 0);
    }
  }
  print_r($mass); echo "<br />";
} else {
  echo "Массив не содержит отрицательных чисел";echo "<br />";
}





