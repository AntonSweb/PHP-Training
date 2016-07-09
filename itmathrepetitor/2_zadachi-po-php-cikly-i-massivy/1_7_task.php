<?php
/**
 * Вывести на экран квадрат, состоящий из n x n квадратов различного цвета.
 */

  $n = rand(30, 130);
  $j = rand(2, 5);
  $l = -(($n * $j) / 2);

  echo "<div style='position: absolute; right: 50%; top: 50%; margin-right: $l; margin-top: $l'>";

    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    for ($i = 1; $i <= $j*$j; $i++) {
      $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
      echo "<div style='display: inline-block; background: $color; width: $n; height: $n;'></div>";
        if ($i % $j == 0) {
          echo "<br />";
        }
    }

  echo "</div>";
