<?php
session_start();

// セッション変数を持っており、かつ承認済みであれば
if (!empty($_SESSION) && $_SESSION['authenticated'] == true) {
    header('Location: member.php'); // 会員ページに移動
    exit;
}

$user = '';
$pass = '';

if (!empty($_POST)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($_POST['user'] === 'taro' and $_POST['pass'] === 'abcd') {
        $_SESSION['authenticated'] = true;
        $_SESSION['userId'] = 'taro';
        header('Location: member.php'); // 会員ページに移動
        exit;
    } elseif ($_POST['user'] !== 'taro' || $_POST['pass'] !== 'abcd') {
        $loginError = 'ユーザIDかパスワードが正しくありません';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <style>
        .error {
            color: #f00;
        }
    </style>
</head>

<body>
    <h1>ログイン</h1>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <p class='error'><?= $loginError ?></p>
    <?php endif; ?>
    <p>ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p>
    <form action="" method="post" novalidate>
        <table>
            <tr>
                <td>ユーザID</td>
                <td><input type="text" name="user" value="<?= $user ?>"></td>
            </tr>
            <tr>
                <td>パスワード</td>
                <td><input type="text" name="pass" value="<?= $pass ?>"></td>
            </tr>
        </table>
        <p><input type="submit" value="ログイン"></p>
    </form>
</body>

</html>
