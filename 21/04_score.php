<?php

if ($score == 70) {
    echo $score . '点';
} else {
if ($score >= 80) {
    echo '優';
} elseif ($score < 80) {
    echo '良';
} elseif ($score < 65) {
    echo '可';
} elseif ($score < 50) {
    echo '不可';
}
}
