<?php
/**
 * Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5
 */

$mass = array(1, 1, 2, 4, 4, 2, 5);
print_r($mass);
echo '<br />';
$result = array_unique($mass);
print_r($result);