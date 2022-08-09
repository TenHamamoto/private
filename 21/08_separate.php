<?php

$arrNums = [42, 7, 35, 54, 71, 32, 13, 8, 21, 45];
$even    = '偶数：';
$odd     = '奇数：';

for ($i = 0; $i < count($arrNums); $i++) {

    if (($arrNums[$i] % 2) === 0) {
        $even .= $arrNums[$i] . ' ';
    } else {
        $odd .= $arrNums[$i] . ' ';
    }
}
echo $even . '<br>' . $odd;
// 偶数：42 54 32 8
// 奇数：7 35 71 13 21 45
