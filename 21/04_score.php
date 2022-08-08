<?php
if ($age >= 50) {
    echo '不可';
} elseif ($age >= 16) {
    echo '高校生です';
} elseif ($age >= 13) {
    echo '中学生です';
} else {
    echo '子供です';
}
