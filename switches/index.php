<?php
$day = "3";
switch($day){
    case 1: echo "Пн"; break;
    case 2: echo "Вт"; break;
    case 3: echo "Ср"; break;
    case 4: echo "Чт"; break;
    case 5: echo "Пт"; break;
    case 6: echo "Сб"; break;
    case 7: echo "Нд"; break;
    default: echo "<span style\"color:red;\">Помилка</span>";
}
/*switch (выражение или переменная){
    case значение1: блок_действий1 break;
    case значение2: блок_действий2 break;
    ...
    default: блок_действий_по_умолчанию 
} */
