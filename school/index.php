<?php
$n = rand(1, 13);
switch($n){
    case 1: echo "{$n} клас - вчимо літери"; break;
    case 2: echo "{$n} клас - вчимо таблицю множення"; break;
    case 3: echo "{$n} клас - вчимо більше предметів"; break;
    case 4: echo "{$n} клас - збільшуємо свій кругозір"; break;
    case 5: echo "{$n} клас - маємо міцну основу"; break;
    case 6: echo "{$n} клас - важаємо, що все вивчили"; break;
    case 7: echo "{$n} клас - вчимо математику"; break;
    case 8: echo "{$n} клас - виходимо на новий рівень"; break;
    case 9: echo "{$n} клас - починаємо щось робити"; break;
    case 10: echo "{$n} клас - починаємо нервувати"; break;
    case 11: echo "{$n} клас - ще є чому повчитися"; break;
    case 12: echo "{$n} клас - майже все вивчили!"; break;
    default: echo "<span style = \"color:red;\">Такого класу ми не маємо!</span>";
}