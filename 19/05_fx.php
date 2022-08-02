<?php

function validAge($name = '名無し', $age = 20)
{
    return $name . 'さんの年齢は' . $age . '歳で成人です。<br>';
}
echo validAge('太郎', 21); // 太郎さんの年齢は21歳で成人です。<br>
echo validAge('次郎', 18); // 次郎さんの年齢は18歳で未成年です。<br>
echo validAge('三郎');     // 三郎さんの年齢は20歳で成人です。<br>
echo validAge();           // 名無しさんの年齢は20歳で成人です。<br>
