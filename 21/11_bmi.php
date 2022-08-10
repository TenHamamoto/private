<?php

const height = 175;
const weight = 70;

$BMI = number_format(weight / (height * 0.01) / (height * 0.01), 2);
$proper = number_format((weight - (height * 0.01) * (height * 0.01) * 22), 2);

echo '身長は' . height . 'cmで体重は' . weight . 'kgのときのBMI値は' . $BMI . 'で、<br>
適正体重は＋' . $proper . 'kgです。';
