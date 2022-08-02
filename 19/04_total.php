<?php

$total = 0;
for ($i = 1; $i <= 30; $i++) {
    $total += $i;
}
echo '合計は' . $total . 'です'. '<br>';

$arrNums = array();
for ($i = 1; $i <= 100; $i++) {
    $arrNums[] += $i;
}

$total2 = 0;
foreach ($arrNums as $count) {
    $total2 += $count;
}
echo '配列の合計は' . $total2 . 'です';
