<?php
// 果物の配列を作成
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];

// 果物の値段リストを作成
$arrayList = [
    'リンゴ' => 100,
    'バナナ' => 200,
    'ぶどう' => 300,
];

$fruits[2] = 'イチゴ';
$fruits[3] = 'メロン';
unset($fruits[1]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';
echo '<pre>';
print_r($fruits);
echo '</pre>';

$arrayList['リンゴ'] = 80;
$arrayList['イチゴ'] = 400;

echo '<pre>';
print_r($arrayList);
echo '</pre>';
?>
