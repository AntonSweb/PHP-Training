<?php
/**
 * Найти сумму натуральных чисел от a до b, где a и b вводит пользователь. В случае некорректных a и b (например, a>b)
 * вывести сообщение 'Сумма не существует'.
 */
if (isset($_GET['button'])){
  $a = $_GET['num_one'];
  $b = $_GET['num_two'];

  if ($a > $b) {
    echo "Сумма не существует";
  } else {
    for ($sum = $a; $a <= $b; $a++) {
      if ($a == $b) {
        echo "Сумма чисел от ".$_GET['num_one']." до ".$b." = ".$sum."<br />";
      } else {
        echo $sum."<br />";
      }
      $sum = $sum + ($a + 1);
    }
  }
}
?>
<form name="number" action="" method="get">
  <br /><br /><input type="number" name="num_one" placeholder="введите число a"><br /><br />
  <input type="number" name="num_two" placeholder="введите число b"><br /><br />
  <input type="submit" name="button" value="Send">
</form>
