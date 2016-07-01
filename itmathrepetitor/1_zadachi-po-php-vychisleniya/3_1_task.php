<?php
/**
 * Пользователь вводит номер дня недели. Вывести название дня недели.
 */
if (isset($_GET['button'])) {
  $number_day = $_GET['day'];
 switch ($number_day) {
   case 1: echo 'Пондельник'; break;
   case 2: echo 'Вторник'; break;
   case 3: echo 'Среда'; break;
   case 4: echo 'Четверг'; break;
   case 5: echo 'Пятница'; break;
   case 6: echo 'Суббота'; break;
   case 7: echo 'Воскресение'; break;
   default: echo 'Такого дня недели не существует';
 }
}
?>
<form name="day" action="" method="get">
  <br /><input type="number" name="day" placeholder="Введите № дня недели"><br /><br />
  <input type="submit" name="button" value="Send">
</form>
