<?php
$totalArr = [
    ['30', '65', '72', '47', '63', '96'],
    ['35', '57', '67', '23', '14', '56', '61'],
    ['46', '16', '27', '58'],
    ['84', '27', '40', '18', '92', '46', '21'],
    ['14', '74', '54', '2', '85']
];
$arr   = '';
$num   = '';
$total = 0;

if (!empty($_POST)) {
    $arr = $_POST['arr']; // ユーザが選択した配列の数値0~4
    $num = $_POST['num']; // 掛ける数値
    $arrPlus = $arr + 1;

    if (!is_numeric($num)) {
        $error = '数値を入力してください';
    } elseif ($num < 1 || 99 < $num) {
        $error = '1から99までの数値を入力してください';
    } else {
        // foreach ($totalArr[$arr] as $value) {
        //     $total += $value;
        // }
        for ($i = 0; $i < count($totalArr[$arr]); $i++) {
            $total += $totalArr[$arr][$i];
        }
        $result = $total * $num;
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
    <style>
        table {
            border-collapse: collapse;
            width: 800px;
        }

        th,
        td {
            border: 1px solid #999;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #eee;
        }

        .error {
            font-size: 80%;
            color: #900;
        }

        .error::before {
            content: "※ ";
        }
    </style>
</head>

<body>
    <h1>合計値の計算</h1>
    <form action="" method="post" novalidate>
        <p>配列の選択：
            <select name="arr">
                <option value="0">配列1</option>
                <option value="1">配列2</option>
                <option value="2">配列3</option>
                <option value="3">配列4</option>
                <option value="4">配列5</option>
            </select>
        </p>
        <p>掛ける数値：<input type="text" size="2" maxlength="2" name="num" value="<?= htmlspecialchars($num, ENT_QUOTES, 'UTF-8'); ?>"></p>
        <p><input type="submit" value="計算"></p>
    </form>
    <?php if (isset($error)) : ?>
        <p class="error"><?= $error ?></p>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <table>
            <tr>
                <th>配列<?= $arrPlus ?></th>
                <?php for ($i = 0; $i < count($totalArr[$arr]); $i++) : ?>
                    <td><?= $totalArr[$arr][$i] ?></td>
                <?php endfor; ?>
                <th>合計 <?= $total ?></th>
                <th>x <?= htmlspecialchars($num, ENT_QUOTES, 'UTF-8'); ?>=</th>
                <th>合計結果：<?= $result ?></th>
            </tr>
        </table>
    <?php endif; ?>
</body>

</html>
