<?php
/**
 * Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка',
 * если месяца с таким номером не существует.
 */

$n = rand(1, 13);
echo $n.'</br>';

if (($n == 1) || ($n == 2) || ($n == 12))  {
  echo 'Winter';
} elseif (($n == 3) || ($n == 4) || ($n == 5)){
  echo 'Spring';
} elseif (($n == 6) || ($n == 7) || ($n == 8)) {
  echo 'Summer';
} elseif (($n == 9) || ($n == 10) || ($n == 11)){
  echo 'Autumn';
} else{
  echo 'Ошибка';
}




