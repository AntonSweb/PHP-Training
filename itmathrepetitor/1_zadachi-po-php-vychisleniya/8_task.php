<?php
/**
 * Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа.
 */

$i = rand(1, 10);
$j = rand(1, 100);

$Result = ($i/100)*40 + ($j/100)*84;

echo $Result;