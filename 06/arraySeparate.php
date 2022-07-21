<?php
$alph = 'A-B-C';

/* A | B | C | D | 4個 */


$x = explode('-',$alph);
$y = array_push($x,'D');
$z = implode(' | ',$x);
echo $z;

echo ' ' . count($x) . '個';

/*
echo $domain . http_build_query(explode('　',$text));
*/
