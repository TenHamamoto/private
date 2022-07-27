<?php 
/**
 * 不快指数を計算する
*/
$t = 32;   // 気温 T
$h = 64;   // 湿度 H

/**
 * 温度と湿度を指定すると不快指数の数値を返す
 *
 * @param integer $t
 * @param integer $h
 * @return null|array
 */
function getDi(?int $t = null, ?int $h = null): ?array
{
    if (empty($t) || empty($h)) return null;

    $diArr['di'] = 0.81 * $t + 0.01 * $h * (0.99 * $t - 14.3) + 46.3;
    if ($diArr['di'] < 55) {
        $diArr['result'] = '寒い';
    } elseif ($diArr['di'] < 60) {
        $diArr['result'] = '肌寒い';
    } elseif ($diArr['di'] < 65) {
        $diArr['result'] = '何も感じない';
    } elseif ($diArr['di'] < 70) {
        $diArr['result'] = '快い';
    } elseif ($diArr['di'] < 75) {
        $diArr['result'] = '暑くない';
    } elseif ($diArr['di'] < 80) {
        $diArr['result'] = 'やや暑い';
    } elseif ($diArr['di'] < 85) {
        $diArr['result'] = '暑くて汗が出る';
    } else {
        $diArr['result'] = '暑くてたまらない';
    }
    return $diArr;
}
?>
気温<?=$t?>℃、湿度<?=$h?>%の時の不快指数は<?=getDi($t, $h)['di']?>で「<?=getDi($t, $h)['result']?>」です。
