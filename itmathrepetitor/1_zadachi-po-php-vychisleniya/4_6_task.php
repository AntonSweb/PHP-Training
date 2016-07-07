<?php
/**
 * Пользователь указывает цвет и размер трех кругов. Вывести их в случайных местах в браузере.
 */
if (isset($_GET['button'])){
  $r = $_GET['radius'] * 37.79527559055;
  $d = 2 * $r;
  $color = $_GET['color'];
  $x = rand(1, 500);
  $y = rand(1, 500);
  $x2 = rand(1, 300);
  $y2= rand(1, 300);
  $x3 = rand(1, 100);
  $y3= rand(1, 100);
  echo "<div style='position: absolute; top: $x; left: $y; width: $d; height: $d; background: $color; border-radius: 50%'></div>";
  echo "<div style='position: absolute; top: $x2; right: $y2; width: $d; height: $d; background: $color; border-radius: 50%'></div>";
  echo "<div style='position: absolute; bottom: $x3; left: $y3; width: $d; height: $d; background: $color; border-radius: 50%'></div>";
}
?>

<form name="number" action="" method="get">
  <br /><br /><input type="number" name="radius" placeholder="введите радиус круга" min="1"><br /><br />
  <input type="color" name="color" placeholder="введите цвет"><br /><br />
  <input type="submit" name="button" value="Send">
</form>

