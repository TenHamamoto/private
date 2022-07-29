<?php

$weekday = ['日', '月', '火', '水', '木', '金', '土'];
$d1 = new DateTime('last day of February 2025');
$d2 = new DateTime('-10 days');
$w1 = $weekday[$d1->format('w')];
$w2 = $weekday[$d2->format('w')];
$interval = $d1->diff($d2);
$days   = $interval->days;
$invert = $interval->invert;

if ($days == 0) {
    echo '同じ日付です';
} elseif ($invert == 1) {
    echo $d1->format('Y年m月d日') . '(' . $w1 . ')の方が「' . $days . '日分」' . $d2->format('Y年m月d日') . '(' . $w2 . ')より新しいです';
} else {
    echo $d2->format('Y年m月d日') . '(' . $w2 . ')の方が「' . $days . '日分」' . $d1->format('Y年m月d日') . '(' . $w1 . ')より新しいです';
}
