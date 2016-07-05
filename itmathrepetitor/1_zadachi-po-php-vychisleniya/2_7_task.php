<?php
/**
 * Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка',
 * если месяца с таким номером не существует.
 */

$array = array(rand(1, 13));
print_r($array).'</br>';

if (in_array(1, $array) || in_array(2, $array) || in_array(12, $array))  {
  echo 'Winter';
} elseif (in_array(3, $array) || in_array(4, $array) || in_array(5, $array)){
  echo 'Spring';
} elseif (in_array(6, $array) || in_array(7, $array) || in_array(8, $array)) {
  echo 'Summer';
} elseif (in_array(9, $array) || in_array(10, $array) || in_array(11, $array)){
  echo 'Autumn';
} else{
  echo 'Ошибка';
}




