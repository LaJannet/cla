<?php
$reg_dom = '#^[images\/\]IMG_\d*\.(jpg|png|gif)$#';
$arr = ["images/IMG_0.png",
 "image/IMG90.gif",
  "images|IMG_89.jpg",
  "images/IMG_2.zip",
];

for($i = 0; $i < count($arr); $i++){
if (preg_match($reg_dom, $arr[$i], $matches))
    echo "$arr[$i] - valid";
else
    echo "$arr[$i] - invalid";
}