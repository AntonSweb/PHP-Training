<?php
/**
 * Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет'
 */

$i = rand(1, 200);
$j = rand(1, 200);
echo $i.' '.$j.'</br>';

if (($i - $j == 100) || ($j - $i == 100)) {
  echo 'ДА';
} else{
  echo 'НЕТ';
}