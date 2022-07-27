<?php

/**
 * 4桁の年数を受け取り和暦に変換
 *
 * @param integer|null $seireki
 * @return string
 */
function getWareki(?int $seireki = null): string
{
    if (!is_numeric($seireki) || $seireki < 1868) {
        $wareki = '未対応';
    } elseif ($seireki < 1912) {
        $year = $seireki - 1867;
        $wareki = '明治' . ($year == 1 ? '元' : $year) . '年';
    } elseif ($seireki < 1926) {
        $year = $seireki - 1911;
        $wareki = '大正' . ($year == 1 ? '元' : $year) . '年';
    } elseif ($seireki < 1989) {
        $year = $seireki - 1925;
        $wareki = '昭和' . ($year == 1 ? '元' : $year) . '年';
    } elseif ($seireki < 2019) {
        $year = $seireki - 1988;
        $wareki = '平成' . ($year == 1 ? '元' : $year) . '年';
    } else {
        $year = $seireki - 2018;
        $wareki = '令和' . ($year == 1 ? '元' : $year) . '年';
    }
    return $wareki;
}


/**
 * XSS対策の参照名省略
 *
 * @param string string
 * @return string
 *
 */
function h(?string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
