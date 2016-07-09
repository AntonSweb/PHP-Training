<?php
/**
 * Вывести на черном фоне n красных квадратов случайного размера в случайной позиции в браузере.
 */

echo "<div style='background: black; width: 100%; height: 100%;'>";
  $n = rand(5, 15);
  $a = rand(30, 80);
   for ($i = 0; $i < $n; $i++) {
     $t = rand(1, 90)."%";
     $l = rand(1, 90)."%";
     echo "<div style='position: absolute; top: $t; left: $l;  background: red; width: $a; height: $a'></div>";
   }
echo "</div>";
