<?php
// 二次元配列の作成
$teams = [
    [
        "rank" => 1,
        "name" => "マチャド",
        "team" => "パドレス",
        "score" => .324
    ],
    [
        "rank" => 2,
        "name" => "アロンソ",
        "team" => "メッツ",
        "score" => .3200
    ],
    [
        "rank" => 3,
        "name" => "タティス",
        "team" => "パドレス",
        "score" => .3197
    ],
    [
        "rank" => 4,
        "name" => "ドノバン",
        "team" => "カージナルス",
        "score" => .318
    ],
    [
        "rank" => 5,
        "name" => "Ｔ・ヘルナンデス",
        "team" => "ドジャース",
        "score" => .315
    ],
];

// 配列の内容を表示
foreach ($teams as $team) {
    echo $team['name'] . "\n";
}

// for文を使って選手の名前を出す
for ($i = 0; $i < count($teams); $i++) {
    echo $teams[$i]["name"] . "\n";
}

echo "<br>";

//サンリオキャラクターの配列
$sanrio = [
    [
        "name" => "ハローキティ",
        "birthday" => "11月1日",
        "hobby" => "クッキーを作ったり、ピアノをひくこと",
    ],
    [
        "name" => "マイメロディ",
        "birthday" => "1月18日",
        "hobby" => "クッキーを焼くこと",
    ],
    [
        "name" => "シナモロール",
        "birthday" => "3月6日",
        "hobby" => "カフェのテラスでお昼寝",
    ]
];
// foreach文を使ってサンリオキャラクターの名前を出す
foreach ($sanrio as $character) {
    echo $character['name'] . "\n";
}
