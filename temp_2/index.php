<?php
$x = rand(360, 410) / 10;
echo "<span style = \"color: blue ;\">температура: </span>" . "   " . $x . "   ";

if ($x < 37.7) {
    echo "Здоров!";
} elseif ($x > 37.7) {
    echo "Болен!";
} else {
    echo "Что-то нездоровится…";
}
