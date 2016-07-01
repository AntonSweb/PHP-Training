<?php
/**
 * Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия), вводит количество дней для отдыха
 * и указывает, есть ли у него скидка (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение
 * количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия.
 * И далее это число уменьшается на 5%, если указана скидка.
 */

if (isset($_GET['button'])) {

  if (!empty($_GET['number'])) {
    $cost = $_GET['number'] * 400;

    switch ($_GET['country']) {
      case 'Египет': $cost = $cost + ($cost / 100) * 10;  break;
      case 'Италия': $cost = $cost + ($cost / 100) * 12;  break;
    }

      if (isset($_GET['yes'])) {
        $cost = $cost - ($cost / 100) * 5;
      }

    echo "Стоимость отдыха: " . $cost . "UAH" . "<br />" . "<br />";

  } else {
    echo "Введите количество дней"."<br />" . "<br />";
  }
}
?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
    //Script for checkbox
  $(function () {

    $(":checkbox").on("click", function() {
      $(this).toggleClass("active");

      var activeFirst = $(":checkbox:first-of-type").hasClass("active");
          activeLast = $(":checkbox:last-of-type").hasClass("active");
      if (activeFirst == true) {
        $(":checkbox:last-of-type").on("click", function() {
          $(":checkbox:first-of-type").removeAttr("checked");
        });
      }
      if (activeLast == true) {
        $(":checkbox:first-of-type").on("click", function() {
          $(":checkbox:last-of-type").removeAttr("checked");
        });
      }
    });

  });
  </script>

<form name="age" action="" method="get">
<select name="country">
  <option>Турция</option>
  <option>Египет</option>
  <option>Италия</option>
</select>
<br /><br /><br /><br /><br /><label>Введите количество дней для отдыха </label><input type="number" name="number" min="1" max="31"><br />
<p>Еслть ли у вас скидка?</p>
<div class="wrap">
<label>Да</label><input type="checkbox" name="yes"  value="yes">
<label>Нет</label><input type="checkbox" name="no" value="no"><br /><br />
  </div>
  <input type="submit" name="button" value="Send">
  </form>


