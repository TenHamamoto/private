<?php
$arrayFunctions = [
    ['array_change_key_case', 'キーを小文字/大文字に変換'],
    ['array_chunk', '配列を分割'],
    ['array_column', '二次元配列から列を取得'],
    ['array_combine', 'キーと値を用意して配列を生成'],
    ['array_count_values', '値ごとの個数を算出'],
    ['array_diff', '配列から配列を引き算'],
    ['array_fill', '同じ値の配列を生成'],
    ['array_fill_keys', 'キーを用意して配列を生成'],
    ['array_filter', '関数を使って選別'],
    ['array_flip', 'キーと値を逆転'],
    ['array_intersect', '共通項を抜粋'],
    ['array_keys', 'キーのみを新たな配列で取得'],
    ['array_key_exists', 'キーが存在するか判定'],
    ['array_merge', '配列を合体'],
    ['array_map', '各値に関数を適用'],
    ['array_pad', '配列数を加算'],
    ['array_pop&array_shift', '配列の前後の要素を削除'],
    ['array_push&array_unshift', '配列の前後に追加'],
    ['array_rand', 'キーをランダムに取得'],
    ['array_reverse', '値を逆順にソート'],
    ['array_search', '検索'],
    ['array_slice', '一部を抜粋'],
    ['array_sum&array_product', '全ての要素に合計値や総乗算'],
    ['array_splice', 'カット＆ペースト'],
    ['array_unique', '重複要素を削除'],
    ['array_values', '数値を添字に置換']
];

echo '<ul>';
for ($i = 0; $i < count($arrayFunctions); $i++) {
    echo '<li>' . $arrayFunctions[$i][0] . 'は、' . $arrayFunctions[$i][1] . 'する。</li>';
}
echo '</ul>';

echo '<ul>';
foreach ($arrayFunctions as $value) {
    echo '<li>' . $value[0] . 'は、' . $value[1] .'する。</li>';
}
echo '</ul>';

//追加仕様

$num = 6;
echo '配列の数は全部で' . count($arrayFunctions) . '個です。<br>';
echo $num--. '番目の関数は' . $arrayFunctions[$num][0] . 'で、'. $arrayFunctions[$num][1] .'する。';
