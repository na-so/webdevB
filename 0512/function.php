<!-- 関数の定義  -->
<?php
function tax($price)
{
    echo $price * 1.1;
}

tax(100);

echo "<br>";

function tax2($price)
{
    return $price * 1.1;
}
echo tax2(100);
$sample = tax2(100);
echo '消費税込み価格は' . $sample . '円です。';
