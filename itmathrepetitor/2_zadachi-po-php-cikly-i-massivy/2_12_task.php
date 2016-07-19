<?php
/**
 * Выведите данное число, которое не превосходит 1000000, прописью (например, 2134 - две тысячи сто тридцать четыре).
 * Массив использовать необязательно.
 */
$n = 999666;
echo $n;echo '<br />';
$n = (string)$n;

for ($i = 0; $i < strlen($n); $i++) {
  switch ($i) {
    case 0: echo "девятсот ";break;
    case 1: echo "девяносто ";break;
    case 2: echo "девять тисяч ";break;
    case 3: echo "шесот ";break;
    case 4: echo "шестдесят ";break;
    case 5: echo "шесть";break;
  }
}