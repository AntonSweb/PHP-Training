<?php
/**
 * Дано число. Увеличьте его на 30%, на 120%.
 */
$n = rand(1, 10);
$result1 = $n + ($n/100)*30;
$result2 = $result1 + ($result1/100)*120;
echo 'увеличиваем число '.$n.' на 30% = '.$result1.'</br>'.'затем на 120% = '.$result2;