# if文またやる
<?php
$condition = "false";
if ($condition) {
    echo '条件はtrueです。';
}
?>
<br>
<?php
$a = 1;
$b = "1";
if ($a === 1) {
    echo "aは数値型です。";
}
if ($b === "1") {
    echo "bは文字列型です。";
}
if ($a == $b) {
    echo "aとbは等しい値です。";
}

echo "<br>";

if ($a === $b) {
    echo "aとbは型も値も等しい値です";
} else {
    echo "aとbは型が等しくありません。";
}

echo "<br>";
$c = 3;
if ($c === 1) {
    echo "cは1です。";
} elseif ($c === 2) {
    echo "cは2です。";
} else {
    echo "cは1でも2でもありません。";
}

echo "<br>";
$d = 4;
if ($d > 1) {
    echo "dは1より大きい値です。";
}
if ($d > 2) {
    echo "dは2より大きい値です。";
}

echo "<br>";
$e = true;
var_dump($e);
# boll型　(ttrue or false)
if ($e === true) {
    # ===は、型も値も一緒
    echo "eはtrueです。";
}

if ($e !== false) {
    echo "eはturueです。";
}
?>

<br>


<?php
//1. 変数 $num = 10 が偶数なら「偶数です」と表示するコードを書いてください。
$num = 10;

if ($num % 2 == 0) {
    echo "偶数です";
}
echo "<br>";

//2. 変数 $age = 20 が 20 以上かつ 30 未満なら「20代です」と表示するコードを書いてください。
$age = 20;
if ($age >= 20 && $age < 30) {
    echo "20代です";
}
echo "<br>";

/*3. 変数 $x = 10 に対して、以下の条件分岐を作成してください。
	• $x が 10 より小さい →「10より小さい」
	• $x が 10 →「ちょうど10」
	• $x が 10 より大きい →「10より大きい」*/

$x = 10;
if ($x < 10) {
    echo "10より小さい";
} elseif ($x == 10) {
    echo "ちょうど10";
} elseif ($x > 10) {
    echo "10より大きい";
}

echo "<br>";

//4. 変数 $password = "secret" に対して、入力されたパスワード $input = "secret" が正しければ「ログイン成功」、違えば「パスワードが間違っています」と表示するコードを書いてください。
$password = "secret";
$input = "secret";
if ($password == $input) {
    echo "ログイン成功";
} else {
    echo "パスワードが間違っています";
}
echo "<br>";
//5. input.html と question3.php を連携させて、変数 $loggedIn = "true" の場合に「ようこそ」それ以外に場合には「ログインしてください」と表示するコードを書いてください。

echo $_POST['login_status'];

$loggedIn = $_POST['login_status'];

if ($loggedIn === "true") {
    echo "ようこそ";
} else {
    echo "ログインしてください";
}
?>