<?php
/**
 * Найти сумму  1+4+7+10+...+112. Ответ: 2147
 */
$i = 1;
$sum = 0;

while ($sum < 2147) {
  $sum = $sum + $i;
  if ($sum > 1) {
    echo " + ";
  }
  echo $i;
  $i = $i + 3;
}

echo "<br />"."Сумма = ".$sum;