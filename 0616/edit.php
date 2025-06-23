<?php

require_once './function.php';

if (empty($_GET['id'])) {
    //idが空欄ならエラー
    echo 'IDを入力してください';
    exit;
}
if (!preg_match('/\A\d{1,11}\z/u', $_GET['id'])) {
    ///IDが数字以外ならエラー
    echo 'IDが正しくありません';
    exit;
}

$id = (int) $_GET['id'];
echo $id;

$dbh = db_open();
//データベースのデータを全部取る
//データベースのidを指定して一件だけ取得
$sql = 'SELECT * FROM books WHERE id = :id';
//SQL文を実行→結果を変換に代入配列
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$result) {
    echo "指定したデータがありません";
    exit;
}
