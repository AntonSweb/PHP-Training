<?php
/**
 *Пользователь выбирает страну из трех вариантов (страну можно указать только одну) и видит название столицы.
 */
if (isset($_GET['button'])) {
  switch ($_GET['country']) {
    case 'Египет': echo "Каир";  break;
    case 'Турция': echo "Анкара";  break;
    case 'Италия': echo "Рим";  break;
  }
}
?>

<form name="age" action="" method="get">
<select name="country" >
  <option></option>
  <option>Турция</option>
  <option>Египет</option>
  <option>Италия</option>
</select>
  <br /><br /> <input type="submit" name="button" value="Send">
</form>