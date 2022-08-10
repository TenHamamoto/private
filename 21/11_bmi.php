<?php

const BMI_HEIGHT = 175;
const BMI_WEIGHT = 70;

$bmiBMI = number_format(BMI_WEIGHT / (BMI_HEIGHT * 0.01) / (BMI_HEIGHT * 0.01), 2);
$bmiProper = number_format((BMI_WEIGHT - (BMI_HEIGHT * 0.01) * (BMI_HEIGHT * 0.01) * 22), 2);

echo '身長は' . BMI_HEIGHT . 'cmで体重は' . BMI_WEIGHT . 'kgのときのBMI値は' . $bmiBMI . 'で、<br>
適正体重は＋' . $bmiProper . 'kgです。';
