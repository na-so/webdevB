<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '田中', 'blood' => 'B'];
$people[] = ['name' => '加藤', 'blood' => 'C'];

var_dump($people);

echo $people[0]['blood'] . "<br>"; #A
echo $people[2]['name'] . "<br>"; #加藤

foreach ($people as $people_key => $value) {
    echo '順番は' . $people_key . "<br>";
    echo $value['name'] . "<br>";
    foreach ($value as $key => $value) {
        echo 'キーは' . $people_key . "値は" . $value . "<br>";
    }
};

# 2次元配列を作ってください。
$people = [
    ['name' => '佐藤', 'blood' => 'A'],
    ['name' => '田中', 'blood' => 'B'],
    ['name' => '加藤', 'blood' => 'O'],
    ['name' => '鈴木', 'blood' => 'AB'],
];

//最後の値を全部取る
foreach ($people as $key => $value) {
    echo $value['blood'] . "<br>";
}
