<?php
/**
 * Пользователь вводит номер дня недели. Выведите список названий всех дней недели в столбец,
 * при этом день, соответствующий данному номеру, выделите большим размером шрифта и другим цветом.
 */
if (isset($_GET['button'])){
  $mn = "Понедельник";
  $tu = "Вторник";
  $we = "Среда";
  $th = "Четверг";
  $fr = "Пятница";
  $st = "Суббота";
  $su = "Воскресение";

  $number_day = $_GET['day'];
  switch ($number_day) {
    case 1: $mn = "<b style='font-size: 19px; color: dodgerblue'>Понедельник</b>" ; break;
    case 2: $tu = "<b style='font-size: 19px; color: dodgerblue'>Вторник</b>" ; break;
    case 3: $we = "<b style='font-size: 19px; color: dodgerblue'>Среда</b>" ; break;
    case 4: $th = "<b style='font-size: 19px; color: dodgerblue'>Четверг</b>" ; break;
    case 5: $fr = "<b style='font-size: 19px; color: dodgerblue'>Пятница</b>" ; break;
    case 6: $st = "<b style='font-size: 19px; color: dodgerblue'>Суббота</b>" ; break;
    case 7: $su = "<b style='font-size: 19px; color: dodgerblue'>Воскресение</b>" ; break;
  }
  echo $mn."<br />";
  echo $tu."<br />";
  echo $we."<br />";
  echo $th."<br />";
  echo $fr."<br />";
  echo $st."<br />";
  echo $su."<br />";
}
?>

<form name="number" action="" method="get">
  <br /><input type="number" name="day" min="1" max="7"><br /><br />
  <input type="submit" name="button" value="Send">
</form>