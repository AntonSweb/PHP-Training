<?php
/**
 * Пользователь вводит свой возраст. Если он больше 80 лет, то вывести 'Здравствуйте, уважаемый', иначе 'Успехов!'.
 */
if (isset($_GET['button'])) {
  $age = $_GET['age'];

  if ($age > 80) {
    echo 'Здравствуйте, уважаемый';
  } else {
    echo 'Успехов!';
  }
}
?>

<form name="age" action="" method="get">
  <br /><input type="number" name="age" placeholder="Ваш возраст"><br /><br />
  <input type="submit" name="button" value="Send">
</form>