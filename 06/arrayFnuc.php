<?php
$domain = 'http://example.com?';
$text = 'PHP　MySQL　Laravel';

$y = explode('　',$text);

echo $domain;
echo http_build_query(['0'=> $y[0], '1'=>  $y[1],'2'=>  $y[2]]);

/* http://example.com?0=PHP&1=MySQL&2=Laravel */
?>
