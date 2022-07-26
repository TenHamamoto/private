<?php
$num    = '';
$arr    = '';

if (!empty($_POST)) {
    $arr    = $_POST['arr'];
    $num    = $_POST['num'];

    $numArr = [
        [30, 65, 72, 47, 63, 96],
        [35, 57, 67, 23, 14, 56, 61],
        [46, 16, 27, 58],
        [84, 27, 40, 18, 92, 46, 21],
        [14, 74, 54, 2, 85]
    ];

    $total = 0;
    $count = $numArr[$arr];
    foreach ($count as $key) {
        $total += $key;
    }
    $total;
    $result = $total * $num;

    if (!is_numeric($num)) {
        $result = '数値を入力してください';
    } elseif ($num > 99 || $num < 1) {
        $result = '1から99までの数値を入力してください';
    }
}


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合計値の計算</title>
</head>

<body>
    <h1>合計値の計算</h1>
    <form action="" method="post">
        <p>配列の選択：
            <select name="arr" value="<?= htmlspecialchars($arr, ENT_QUOTES, 'UTF-8'); ?>">
                <option value='0' <?php if ($arr == '配列1') echo 'selected'; ?>>配列1</option>
                <option value='1' <?php if ($arr == '配列2') echo 'selected'; ?>>配列2</option>
                <option value='2' <?php if ($arr == '配列3') echo 'selected'; ?>>配列3</option>
                <option value='3' <?php if ($arr == '配列4') echo 'selected'; ?>>配列4</option>
                <option value='4' <?php if ($arr == '配列5') echo 'selected'; ?>>配列5</option>
            </select>
        </p>
        <p>掛ける数値：
            <input type="text" name="num" maxlength="2" value="<?= htmlspecialchars($num, ENT_QUOTES, 'UTF-8'); ?>">
        </p>
        <p><input type="submit" value="計算"></p>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
            <p>合計結果：<?= $result ?></p>
        <?php endif; ?>
    </form>
</body>

</html>
