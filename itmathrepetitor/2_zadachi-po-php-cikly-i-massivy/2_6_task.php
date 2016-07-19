<?php
/**
 * Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.
 */

$mass = range(30, 1, 2);
print_r($mass);
//sort($mass);

for ($j = 0; $j < count($mass) - 1; $j++) {
  for ($i = 0; $i < count($mass) - 1; $i++) {
    if ($mass[$i] > $mass[$i + 1]) {
      $x = $mass[$i + 1];
      $mass[$i + 1] = $mass[$i];
      $mass[$i] = $x;
    }
  }
}
echo "<br />"."<br />";
print_r($mass);