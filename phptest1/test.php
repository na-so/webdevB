<?php
//変数 $a = 5 と $b = 3があります。$aを更新しecho $a;で結果が 8と画面に表示されるプログラムを記述してください。
$a = 5;
$b = 3;
$a = $a + $b;
echo ($a);
// 変数 $nameにクラスメイトの名字"◯◯"を代入し 、.=を使って"さん、元気？" を追加して "◯◯さん、元気？" と表示させてください。
$name = "橋本";
echo $name .= "さん、元気？";
// $total = 1000に税込10%を加えた金額（整数）を表示するコードを書いてください。
$total = 1000;
echo $total = $total + $total * 0.1;
//0から100までのランダムな整数を変数$scoreに代入する。
//「スコア: ○○」の形式でスコアを表示する。
//スコアが80以上なら「優」、60以上80未満なら「良」、それ以外は「可」と表示する。
$score = rand(0, 100);
echo "スコア:", $score;
if ($score >= 80) {
    echo "優";
} elseif ($score >= 60) {
    echo "良";
} else {
    echo "可";
}
//1〜100のうち、3の倍数だけを改行付きで表示してください。
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        echo $i . "<br>";
    }
}
//連想配列 $person = ['name' => 'Taro', 'age' => 20] のキーと値を「name: Taro」の形式で出力するコードをforeachを使って書いてください。
$person = ['name' => 'Taro', 'age' => 20];
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
//次の2次元配列$usersには、複数人の名前・年齢・スコアが格納されています。
//各ユーザーについて「名前: 年齢歳, スコア: ○○, 判定: △△」の形式で1人ずつ表示するPHPコードを書きなさい。
//判定はスコアが80以上なら「優」、60以上80未満なら「良」、それ以外は「可」とすること。
$users = [
    ['name' => 'Ken', 'age' => 20, 'score' => 85],
    ['name' => 'Yui', 'age' => 22, 'score' => 78],
    ['name' => 'Taro', 'age' => 19, 'score' => 55]
];
foreach ($users as $user) {
    if ($user['score'] >= 80) {
        $result = "優";
    } elseif ($user['score'] >= 60) {
        $result = "良";
    } else {
        $result = "可";
    }
    echo $user['name'] . ": " . $user['age'] . "歳, スコア: " . $user['score'] . ", 判定: " . $result . "<br>";
}

//8問目
$score = rand(0, 100);
?>
<p>スコア: <?= $score ?></p>

<?php if ($score >= 80): ?>
    <p>優</p>
<?php elseif ($score >= 60): ?>
    <p>良</p>
<?php else: ?>
    <p>可</p>
<?php endif; ?>

<?php
//functions.phpに定義された関数 greet() を読み込んで実行するコードを書いてください。エラーが出たら処理を停止させるようにしてください。

// functions.php
function str2html(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
function greet()
{
    echo "<p>こんにちは！</p>";
}
