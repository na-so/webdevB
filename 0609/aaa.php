<?php
function test()
{
    $a = 10;
    return $a;
}

$a = test(2);
echo $a; // 10と表示される→ローカル変数の値が戻り値としてグローバル変数に代入される。