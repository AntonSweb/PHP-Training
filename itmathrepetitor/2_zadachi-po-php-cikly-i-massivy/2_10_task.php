<?php
/**
 * Даны два упорядоченных по возрастанию массива.
 * Образовать из этих двух массивов единый упорядоченный по возрастанию массив.
 */
$mass = range(1, 10, 1);
$arr = range(5, 20, 2);

print_r($mass);echo '<br />';
print_r($arr);echo '<br />';

$join = array_merge($mass, $arr);

//  for ($i = 0; $i < count($mass) + count($arr); $i++){
//    if ($i < count($mass)) {
//      $join[$i] = $mass[$i];
//    }
//    if ($i >= count($mass)) {
//      $join[$i] = $arr[$i-count($mass)];
//    }
//  }

  echo '<br />';print_r($join);echo '<br />';

  sort($join);
  echo '<br />';print_r($join);echo '<br />';