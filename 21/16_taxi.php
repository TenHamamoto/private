<?php

$distance = 1001;

function getPriceTaxi($distance): int
{

    if ($distance < 1000) {
        $price = 410;
    } else {
        for ($i = 80; $i <= ceil(($distance - 1000) / 237) * 80; $i++) {
            $price = 410 + $i;
        }
    }

    return $price;
}

echo $distance . 'm乗った場合の料金は' . getPriceTaxi($distance) . '円です。';
