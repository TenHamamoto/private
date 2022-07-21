<?php
$alph = 'A-B-C';

/* A | B | C | D | 4個 */

$alphArr = explode('-', $alph);

$count = array_push($alphArr, 'D');

array_push($alphArr, $count . '個');

echo implode(' | ', $alphArr);
