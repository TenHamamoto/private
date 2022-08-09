<?php

$arrNums = [42, 7, 35, 54, 71, 32, 13, 8, 21, 45];
$even = '偶数：';
$odd = '奇数：';

// 偶数：42 54 32 8
// 奇数：7 35 71 13 21 45


$alph = 'A-B-C';

/* A | B | C | D | 4個 */

$alphArr = explode('-', $alph);

$count = array_push($alphArr, 'D');

array_push($alphArr, $count . '個');

echo implode(' | ', $alphArr);
