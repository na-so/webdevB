<?php
// $str = "〒450-0002 愛知県名古屋市中村区名駅3-24-15";
// preg_match('/〒(\d{3}-\d{4}) (.+)/', $str, $matches);
// var_dump($matches);

$str = "12345678";
$rtn = preg_match("/\A\d{7}z/u", $str);
$str2 = "1234567あ";
$rtn2 = preg_match("/\A\d{7}z/u", $str2);
$str3 = "111-1234567";
$rtn3 = preg_match("/\A\d{7}z/u", $str3);
$str4 = "111-1234567";
$rtn4 = preg_match("/\A\d{7}z/u", $str4);

echo "結果1";
var_dump($str);
echo "結果2";
var_dump($str2);
echo "結果3";
var_dump($str3);
echo "結果4";
var_dump($str4);
