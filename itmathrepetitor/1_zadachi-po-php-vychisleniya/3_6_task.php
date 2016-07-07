<?php
/**
 * Cоздать 3 кнопки с названиями 1, 2, 3, расположенные друг над другом. При нажатии на любую кнопку
 * порядок меняется на 2, 1, 3. Затем при нажатии на любую кнопку порядок меняется на 3, 2, 1.
 * Затем при нажатии на любую кнопку порядок меняется на 1, 2, 3. И так далее.
 */

?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  $(function(){

    $("[type='button']").on("click", function () {
      $("[name='button_one']").attr("value", "2");
      $("[name='button_two']").attr("value", "1");

      $("[type='button']").on("click", function () {
        $("[name='button_three']").attr("value", "1");
        $("[name='button_two']").attr("value", "2");
        $("[name='button_one']").attr("value", "3");

        $("[type='button']").on("click", function () {
          $("[name='button_three']").attr("value", "3");
          $("[name='button_two']").attr("value", "2");
          $("[name='button_one']").attr("value", "1");
        });
      });
    });

  });
  </script>

<form name="age" action="" method="get">
  <input type="button" name="button_one" value="1"><br />
  <input type="button" name="button_two" value="2"><br />
  <input type="button" name="button_three" value="3">
</form>

<?php

?>
