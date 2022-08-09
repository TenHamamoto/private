<?php

$arrNums = [42, 7, 35, 54, 71, 32, 13, 8, 21, 45];
$even = '偶数：';
$odd = '奇数：';

// 偶数：42 54 32 8
// 奇数：7 35 71 13 21 45

echo '<pre>';
print_r($arrNums);
echo '</pre>';


for ($i = 0; $i < count($arrNums); $i++) {

    echo $arrNums[$i];

    


    echo '<br>';
}


for ($i = 1; $i <= 100; $i++) {

    echo $i;

    if ($i % 3 === 0 && $i % 5 === 0) {
        echo ':FizzBuzz';
    } elseif ($i % 3 === 0) {
        echo ':Fizz';
    } elseif ($i % 5 === 0) {
        echo ':Buzz';
    }

    echo '<br>';
}
