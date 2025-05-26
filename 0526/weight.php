<?php
//weight.php
$height = (float)$_POST['height'];
$weight = (float)$_POST['weight'];

if (($height < 0) || ($height > 3)) {
    echo "身長を正しく入力してください。";
    exit;
}

if (($weight < 30) || ($weight > 200)) {
    echo "体重を正しくに入力してください。";
    exit;
}

$goal_wight = $height * $height * 22;
//差の計算
$difference = abs($goal_wight - $weight);

echo '今現在の体重' . $weight . 'kg<br>';
echo '目標体重' . $goal_wight . 'kg<br>';
echo '後' . $difference . 'kgで適正体重です。<br>';
