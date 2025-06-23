<?php
// zip1, zip2を結合して「123-4567」形式にする
$zip1 = $_POST['zip1'] ?? '';
$zip2 = $_POST['zip2'] ?? '';
$zip = $zip1 . '-' . $zip2;

// 全角数字や空白を除去して正規化
$zip = preg_replace('/\s+/', '', mb_convert_kana($zip, 'a'));

if (preg_match('/\A\d{3}-\d{4}\z/', $zip)) {
    echo "正しい郵便番号形式です。";
} else {
    echo "郵便番号の形式が正しくありません。";
}
