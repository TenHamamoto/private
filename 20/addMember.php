<?php declare(strict_types=1);

require_once dirname(__FILE__) . '/db.inc.php';
require_once dirname(__FILE__) . '/util.inc.php';
require_once dirname(__FILE__) . '/Validation.php';

$name    = '';
$age     = '';
$address = '';

$error['name'] = '';
$error['age']  = '';

if (!empty($_POST)) {
    $name    = $_POST['name'];
    $age     = $_POST['age'];
    $address = $_POST['address'];

    $v = new Validation();
    $error['name'] = $v->validName($name);

    $res = $v->validAge($age);
    $age          = $res['age'];
    $error['age'] = $res['err'];

    if (!isset($error['name']) && !isset($error['age'])) {
    try {
        $pdo = dbConnect();
        $stmt = $pdo->prepare(
            'INSERT INTO members (name, age, address, created_at) VALUES (:name, :age, :address, NOW())'
        );
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':age', (int) $age, PDO::PARAM_INT);
        $stmt->bindValue(':address', $address, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        header('Content-Type: text/plain; charset=UTF-8', true, 500);
        exit($e->getMessage());
    }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員管理システム</title>
    <style>
        .error {
            color: #900;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>会員登録</h1>
    <p><a href="member.php">会員一覧に戻る</a></p>
<?php if (!isset($error)): ?>
    <p>登録完了しました。</p>
<?php else: ?>
    <form action="" method="post">
        <p>氏名：<input type="text" name="name" value="<?= h($name) ?>">
        <?php if (!empty($error['name'])):?><span class="error"><?= $error['name'] ?></span><?php endif;?></p>
        <p>年齢：<input type="text" name="age" value="<?= h($age) ?>">
        <?php if (!empty($error['age'])):?><span class="error"><?= $error['age'] ?></span><?php endif;?></p>
        <p>住所：<input type="text" name="address" value="<?= h($address) ?>"></p>
        <p><input type="submit" value="送信"></p>
    </form>
<?php endif; ?>
</body>

</html>
