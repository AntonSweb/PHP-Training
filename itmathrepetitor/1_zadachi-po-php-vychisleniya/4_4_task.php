<?php
/**
 * Пользователь вводит три числа: координаты левой верхней вершины квадрата и длина его стороны. Вывести на странице такой квадрат.
 * Цвет фона страницы, цвет границы квадрата и цвет фона квадрата различны и выбираются случайным образом из пяти фиксированных цветов.
 */
if (isset($_GET['button'])){
  $x = $_GET['num1'] * 37.79527559055;
  $y = $_GET['num2'] * 37.79527559055;
  $a = $_GET['num3'] * 37.79527559055;
  $mass = array('greenyellow', 'firebrick', 'lightskyblue', 'navajowhite', 'olive');
  $key = array_rand($mass);
  $color = $mass[$key];
  $mass2 = array('gray', 'antiquewhite', 'aquamarine', 'antiquewhite', 'slateblue');
  $key2 = array_rand($mass2);
  $color2 = $mass[$key2];
  echo "<div style='position: absolute; top: $y; left: $x; margin: 10px;  width: $a; height: $a; border: 1px solid $color; background: $color;'></div>";
  echo "<body style='background: $color2;'></body>";
}
?>

<form name="number" action="" method="get">
  <br /><br /><input type="number" name="num1" placeholder="введите координату x"><br /><br />
  <input type="number" name="num2" placeholder="введите координату y"><br /><br />
  <input type="number" name="num3" placeholder="введите сторону квадрата" min="1"><br /><br />
  <input type="submit" name="button" value="Send">
</form>

