<?php
/**
 * Вывести n случайных серий из чисел 0, 1 и 2 таких, что сумма чисел в каждой серии равна s.
 * Найти количество единиц в каждой серии, количество двоек в каждой серии, длину каждой серии,
 * среднее количество двоек в сериях, среднюю длину серий и наибольшее количество ненулевых чисел в сериях.
 * В случае некорректности n и k вывести слово 'Ошибка'.
 */

$mass = array(0, 1, 2);
if (is_integer($mass[0]) == true && is_integer($mass[1]) == true && is_integer($mass[2]) == true) {

  $n2 = rand(1, 10); // Количество серий
  $average = 0; // Среднее количество двоек
  $length = 0; // Средняя длина серий
  $max_amount_zero = 0; // Наибольшее количество ненулевых чисел в сериях

  for ($k = 0; $k < $n2; $k++) {
    $n = rand(1, 3); // Количестов цифр в сериях
    $s = 0;
    $amount_one = 0;
    $amount_two = 0;
    $amount_zero = 0;

    for ($j = 0; $j < $n; $j++) {
      $i = rand(0, 2);
      echo $mass[$i];
      $s = $s + $mass[$i];

      if ($mass[$i] == 1) {
        $amount_one++;
      }
      if ($mass[$i] == 2) {
        $amount_two++;
      }
      if ($mass[$i] == 0) {
        $amount_zero++;
      }
    }
    $average = $average + $amount_two;
    $length = $length + $n;

    echo "<br />";
    echo " " . "Сумма: " . $s . "; " . "Количество единиц: " . $amount_one . "; " . "Количество двоек: " . $amount_two
      . "; " . "Длинна серии: " . $n;
    echo "<br /><br />";

    if ($amount_zero > $max_amount_zero) {
      $max_amount_zero = $amount_zero;
    }
  }
  $average = $average / $n2;
  $length = $length / $n2;

  echo "<br />" . "Среднее количество двоек в сериях: " . round($average) . "<br />";
  echo "Средняя длина серий: " . round($length) . "<br />";
  echo "Наибольшее количество ненулевых чисел в сериях: " . $max_amount_zero;

} else{
  echo "Ошибка";
}

