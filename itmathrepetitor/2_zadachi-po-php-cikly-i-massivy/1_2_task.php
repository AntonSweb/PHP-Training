<?php
/**
 * Выведите на экран n раз фразу "Silence is golden". Число n вводит пользователь на форме.
 * Если n некорректно, вывести фразу "Bad n".
 */
if (isset($_GET['button'])){
  $n = $_GET['num'];
  $i = 0;

  if ($n <= 0 || $n > 100) {
    echo "Bad n";
  } else {
    while ($i < $n) {
      echo "Silence is golden"."<br />";
      $i++;
    }
  }
}
?>

<form name="number" action="" method="get">
  <br /><br /><input type="number" name="num" placeholder="введите число"><br /><br />
  <input type="submit" name="button" value="Send">
</form>

