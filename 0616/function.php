<?php
//関数を定義
function str2html(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
