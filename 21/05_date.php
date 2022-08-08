<?php

$weekday = ['日', '月', '火', '水', '木', '金', '土'];
$d = new DateTime();
$d->modify('-1 month');
$w = $weekday[$d->format('w')];
echo '1ヶ月前の日付は' . $d->format('Y年m月d日') . '(' . $w . ')' . 'です。';
