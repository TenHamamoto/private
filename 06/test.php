<?php
$arr      = [10, 20, 5 => 50];
$arr[3]   = 30;
$arr[]    = '10';
$arr[]    = '20';
$arr[5]   = '30';
unset($arr[7]);
$arr['4'] = 10;
$arr[]    = [...[40]];

// 0 => 10
// 1 => 20
// 2 => '10'
// 3 => 30
// 4 => '10'
// 5 => '30'
// 6 => 40
// 8 =>

// 0 => 10
// 1 => 20
// 5 => '30'
// 3 => 30
// 6 => '10'
// 4 => 10
// 8 => [40]

echo '<pre>';
print_r($arr);
echo '</pre>';
?>
