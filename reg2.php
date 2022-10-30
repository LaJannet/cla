<?php
$reg_4 = '/каво(варка|молка)/';
$s = 'Продаються кавоварка та кавомолка';
if (preg_match_all($reg_4, $s, $arr1)) {
    print_r($arr1);
}

$s = "the white king and the red queen";
$r = '/the ((?:red|white) (?:king|queen))/';
if (preg_match_all($r, $s, $arr)) {
    print_r($arr);
}

$string = '<p>User_roles</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>';
//$pattern = '/(\w+) (\d+), (\d+)/i';
$pattern = '#<p>(\w+)</p>#';
if (preg_match_all($pattern, $string, $arr)) {
    print_r($arr);
}
// $replacement = '$1';
// echo preg_replace($pattern, $replacement, $string);

// $r = '/(\w+)\s\1/';
// $s = 'cat cat also dog dog hat hat';
// if (preg_match_all($r, $s, $arr))
// print_r($arr);

// $r='/\w{3}(?=cat)/';
// $s="dogcatrat!";
// if (preg_match_all($r, $s, $arr))
//  	print_r($arr);

$r = '/<.+?>/';
$s = '<h1>cat</h1> and <h2>dog</h2>
<p></p> <a href=""></a>';
if (preg_match_all($r, $s, $arr))
print_r($arr);