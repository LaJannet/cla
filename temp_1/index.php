<?php
$x = rand(-300, 500) / 10;
$x = (int) $x;
if ($x < 0) {
    echo "<p style = \" color: blue;\">Мороз! Температура: </p>" . $x;
}
if ($x == 0) {
    echo "<p style = \" color: orange;\">Не мороз и не тепло. Температура: </p>" . $x;
}
if ($x > 0) {
    echo "<p style = \" color: red;\">Тепло! Температура: </p>" . $x;
}
