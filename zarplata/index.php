<?php
$text = "04.01.2020\n";
$text = "31.12.2021\n";
$texter = "31.12.2020\n";

// функція зворотного виклику
function next_year($matches)
{
  return $matches[0] + 1;
}

function prev_month($matches)
{
//   return $matches[0]."";
$n = trim($matches[0], ".");
$n--;
return $n;
}

function m($matches){

}

echo preg_replace_callback("/\d{4}/", "m", $texter);

// echo preg_replace_callback("/\d{4}/", "next_year", $text);

// echo preg_replace_callback("/\.\d{2}\./", "prev_month", $text);