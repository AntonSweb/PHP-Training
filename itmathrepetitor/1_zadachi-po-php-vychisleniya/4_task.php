<?php
/**
 *Даны три числа x,y и z. Найдите (x+1)4−2(z−2x2+y2)+|siny|−−−−−√
 */
$x=2;
$y=6;
$z=4;

$Result = pow(($x+1),4) - 2*($z - 2*(pow($x,2)) + pow($y,2)) + sqrt(abs(sin($y)));

echo "Резульат: ".round($Result);