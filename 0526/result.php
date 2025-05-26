<?php
// register.php
// POSTで送信された値を受け取る
echo "<h1>受け取ったデータ</h1>";
echo $_POST["name"], "さん、こんにちは";
echo $_POST["age"], "歳ですね";
