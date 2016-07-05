<?php
/**
 * Вычислите значение выражения x2+1−x2−−−−−√tesinx+s. Перед вычислением проверить корректность значений переменных,
 * которые вводит пользователь. Результат показать в квадрате с синим фоном и красной рамкой.
 */

if (isset($_GET['button'])){
//  $num = (int)$_GET['day'];
  $x = $_GET['num'];
  $e = M_E;
  if (is_numeric($x)) {
   $result = (pow($x, 2) + sqrt(1 - pow($x,2))) / (pow($e, sin($x)+2));
    echo "<p style='border: 1px solid red; background: lightskyblue'>$result</p>";
  } else {
    echo "Неверные данные";
  }
}
?>

<form name="number" action="" method="get">
  <br /><input type="text" name="num"><br /><br />
  <input type="submit" name="button" value="Send">
</form>
