<?php
$goods1 =   [
    'name'         => '和風柄レターセット',
    'price'        => 980,
];
$goods2 =   [
    'name'         => '毛筆ペン(細字)',
    'price'        => 240,
];
$count = $_POST['count'];
$totalPrice = $goods['price'] * $count;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショッピングカート</title>
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }

        th,
        td {
            border: 1px solid #666666;
            padding: 4px;
        }

        th {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h1>ショッピングカート</h1>
    <form action="" method="post">
    <table>
        <tr>
            <th>商品名</th>
            <th>単価</th>
            <th>数量</th>
            <th>小計</th>
        </tr>
        <tr>
            <td>和風柄レターセット</td>
            <td>980円</td>
            <td>
            <input type="text" name="count" value="<?=htmlspecialchars($count, ENT_QUOTES)?>">
            </td>
            <td><?= $totalPrice ?></td>
        </tr>
        <tr>
            <td>毛筆ペン(細字)</td>
            <td>240円</td>
            <td>
            <input type="text" name="count" value="<?=htmlspecialchars($count, ENT_QUOTES)?>">
            </td>
            <td><?= $totalPrice ?></td>
        </tr>
    </table>
    <p><input type="submit" value="更新"></p>
    </form>
</body>

</html>
