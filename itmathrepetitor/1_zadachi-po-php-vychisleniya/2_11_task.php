<?php
/**
 * Вычислите значение выражения max2(x,y,z)−3x⋅min(x,y,z)sin1+max(x,y−z)/min(y,z).
 *Если вычисление невозможно, то сообщите об этом пользователю.
 */
$x = rand(1, 5);
$y = rand(1, 5);
$z = rand(1, 5);
$result = (pow(max($x, $y, $z), 2) - pow(3, $x) * min($x, $y, $z)) / (sin(1) + max($x, ($y-$z)) / min($y, $z));
echo $result;