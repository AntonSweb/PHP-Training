<?php
/**
 * Пользователь вводит три действительных числа. Определить, существует ли треугольник с длинами сторон,
 * равными этим числам. Если да, то определить, является ли данный треугольник остроугольным.
 */
if (isset($_GET['button'])){
  $a = $_GET['num1'];
  $b = $_GET['num2'];
  $c = $_GET['num3'];

  if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)){
    echo "Треугольник существует"."<br /><br />";
    if ((pow($a, 2) + pow($b, 2) > pow($c, 2)) && (pow($a, 2) + pow($c, 2) > pow($b, 2))
      && (pow($b, 2) + pow($c, 2) > pow($a, 2))) {
      echo "Треугольник остроугольный";
    } else {
      echo "Треугольник не остроугольный";
    }
  } else {
    echo "Треугольник с указаными сторонами не существует";
  }
}
?>

<form name="number" action="" method="get">
  <br /><br /><input type="number" name="num1" placeholder="введите сторону а" min="1"><br /><br />
  <input type="number" name="num2" placeholder="введите сторону b" min="1"><br /><br />
  <input type="number" name="num3" placeholder="введите сторону c" min="1"><br /><br />
  <input type="submit" name="button" value="Send">
</form>
