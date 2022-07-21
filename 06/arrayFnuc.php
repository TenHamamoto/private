<?php
$domain = 'http://example.com?';
$text = 'PHP　MySQL　Laravel';
/* http://example.com?0=PHP&1=MySQL&2=Laravel */
echo $domain . http_build_query(explode('　',$text));
?>
