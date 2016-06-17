<?php
/**
 * Вычислите значение выражения x2−4y−1−−−−√sin2x+|x|.
 * Перед вычислением проверить корректность значений переменных.
 */
$x = rand(1,10);
$y = rand(1,10);
$Result;

if (isset($x) && (isset($y))) {
 $Result = (pow($x,2) - 4*(sqrt($y-1))) / (sin(2*$x) + $x);
  echo round($Result);
} else{
  echo 'Error';
}
