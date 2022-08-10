<?php
$arrNums = [1, 7, 11];

/**
 * 配列内で数値を指定すると、四捨五入した平均値を返す
 *
 * @param array|null $arrNums
 * @return integer
 */
function getAvg(?array $arrNums): int
{
    $total = 0;
    foreach ($arrNums as $Num) {
        $total += $Num;
    }
    return round($total) / count($arrNums);
}

echo '平均値は' . getAvg($arrNums) . 'です。';
