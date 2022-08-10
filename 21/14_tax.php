<?php
$price = 9876;

/**
 * 税抜き価格の変数を指定すると、
 * 10%の税込み価格を返す
 *
 * @param integer $price
 * @return integer
 */
function getTaxPrice(?int $price): int
{
    return round($price * 1.1);
}

echo '税込み価格は' . number_format(getTaxPrice($price)) . '円です。';
// 税込み価格は10,864円です。
