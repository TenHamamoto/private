<?php
session_start();

$_SESSION = [];
$p = session_get_cookie_params();
setcookie(
    'PHPSESSID',
    '',
    time() - 1,
    $p['path'],
    $p['domain'],
    $p['secure'],
    $p['httponly']
);
session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト</title>
</head>

<body>
    <p>ログアウトしました</p>
    <p><a href="login.php">ログインページへ</a></p>
</body>

</html>
