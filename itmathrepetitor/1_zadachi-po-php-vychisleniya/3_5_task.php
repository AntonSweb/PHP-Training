<?php
/**
 *Пользователь вводит свой имя, пароль, email. Если вся информация указана, то показать эти данные после фразы
 * 'Регистрация прошла успешно', иначе сообщить какое из полей  оказалось не заполненным.
 */

if (isset($_GET['button'])) {
  if (!empty($_GET['name']) && !empty($_GET['password']) && !empty($_GET['email'])) {
    echo "Регистрация прошла успешно"."<br />";
    echo "Имя: ".$_GET['name']."<br />" ;
    echo "Пароль: ".$_GET['password']."<br />" ;
    echo "Почта: ".$_GET['email']."<br />" ;
  }

  if (empty($_GET['name'])) {
    echo "Не заполнено поле имя"."<br />";
  }
  if (empty($_GET['password'])) {
    echo "Не введен пароль"."<br />";
  }
  if (empty($_GET['email'])) {
    echo "Не заполнено поле email"."<br />";
  }

}
?>

<form name="age" action="" method="get">

    <br /><input type="text" name="name"  placeholder="Ваше имя"><br /><br />
    <input type="password" name="password"  placeholder="Пароль"><br /><br />
    <input type="email" name="email" placeholder="Ваш Email"><br /><br />
    <input type="submit" name="button" value="Send">
</form>

