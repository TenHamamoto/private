<?php
$name   = '';
if (!empty($_POST)) {
$name   = $_POST['name'];
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
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" size="2" maxlength="2" value="<?= h($name) ?>">
        <input type="submit" value="送信">
    </form>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
<h2><?= h($name) ?>さん、おはようございます！</h2>
<?php endif; ?>
</body>
</html>
