<?php
/**
 * Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'.
 */

$i = rand(1, 50);
$j = rand(1,50);
echo $i.' '.$j.'</br>';

if (($i - $j <= 20) && ($j - $i <=20)) {
  echo 'Да';
} else{
  echo 'Нет';
}