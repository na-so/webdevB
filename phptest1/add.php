<?php
# add.php
require_once './function.php';

if (!preg_match('/\A[[:^cntrl:]]{1,200}\z/u', $_POST['title'])) {
    echo "タイトルは200文字までです";
    exit;
}

if (!preg_match('/\A\d{1,13}\z/u', $_POST['isbn'])) {
    echo "ISBNは13桁のまでです。";
    exit;
}

if (!preg_match('/\A\d{1,6}\z/u', $_POST['price'])) {
    echo "価格は6桁までです";
    exit;
}

if (empty($_POST['publish'])) {
    echo '日付は必須です。';
    exit;
}

if (!preg_match('/\A\d{4}-\d{1,2}-\d{1,2}\z/u', $_POST['publish'])) {
    echo '日付のフォーマットが違います。';
    exit;
}

$date = explode('-', $_POST['publish']);
if (!checkdate($date[1], $date[2], $date[0])) {
    echo '正しい日付を入力してください。';
    exit;
}

if (!preg_match('/\A[[:^cntrl:]]{1,80}\z/u', $_POST['author'])) {
    echo '著者名は80文字以内で入力してください。';
    exit;
}

try {
    $user = 'phpuser';
    $password = 'Natori0624'; // 任意のパスワード
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
    $sql = "INSERT INTO books(id,title,isbn,price,publish,author)
VALUES(NULL,:title,:isbn,:price,:publish,:author)";
    $stmt = $dbh->prepare($sql);
    // var_dump($stmt);
    $stmt->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindValue(':isbn', $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindValue(':price', $_POST['price'], PDO::PARAM_INT);
    $stmt->bindValue(':publish', $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindValue(':author', $_POST['author'], PDO::PARAM_STR);

    $stmt->execute();
    echo 'データが追加されました。<br>';
    echo '<a href="./index.php">リストへ戻る</a><br>';
} catch (PDOException $e) {
    echo 'error: ' . str2html($e->getMessage()) . '<br>';
    exit;
}
var_dump($_POST);
