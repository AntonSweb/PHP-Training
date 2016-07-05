<?php
/**
 *Дано два числа. Вывести наибольшее из них.
 */
$i = rand(1, 10);
$j = rand(1, 10);
echo $i.' '.$j.'</br>';

if ($i > $j){
  echo $i;
} else{
  echo $j;
}