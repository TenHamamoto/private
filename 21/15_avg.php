<?php
$arrNums = [1, 7, 11];
// 平均値は6です。

function getAvg(?array $arrNums): int
{
    $total = 0;
    foreach ($arrNums as $Num) {
        $total += $Num;
    }
    return round($total);
}

echo '平均値は' . getAvg($arrNums) . 'です。';


/**
 * 購入商品価格の配列を指定すると、
 * 10%の税込み価格を返す
 *
 * @param array|null $arrNums
 * @param integer|null $tax
 * @return integer
 */
