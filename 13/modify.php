<?php
$d1 = new DateTime('last day of February 2025');
$d2 = new DateTime();
$d2->modify('-10 days');

$interval = $d1->diff($d2);
$days = $interval->days; // 日数の差を取得
$invert = $interval->invert; // 判定の数値1or0を取得
if ($days == 0) {
    echo '日付は同じです';
} else {
    if ($invert == 1) {
        echo $d1->format('Y年m月d日') . 'の方が「' . $days .'日分」'. $d2->format('Y年m月d日') . 'より新しいです';
    } else {
        echo $d2->format('Y年m月d日') . 'の方が「' . $days .'日分」'. $d1->format('Y年m月d日') . 'より古いです';
    }
}
