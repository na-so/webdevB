<?php

$name = [
    0 => '佐藤',
    1 => '鈴木',
    2 => '高橋'
];
var_dump($name);
echo "<br> ";

$name = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
];
var_dump($name);

echo $name['takahashi'];

foreach ($name as $value) {
    echo $value . "<br>";
}

foreach ($name as $key => $value) {
    echo 'キーは' . $key . "名前は" . $value . "<br>";
}
