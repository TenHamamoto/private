<?php
$goods1 =   [
'name'  => '和風柄レターセット',
'price' => 980,
];
$goods2 =   [
'name'  => '毛筆ペン(細字)',
'price' => 240,
];
$count1      = $_POST['count1'];
$count2      = $_POST['count2'];
$subTotal1   = $goods1['price'] * $count1;
$subTotal1   = $goods2['price'] * $count2;
$total       = $subTotal1 + $subTotal2;
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
            <td><?= $goods1['name'] ?></td>
            <td><?= $goods1['price'] ?></td>
            <td>
            <input type="text" name="count1" value="<?=htmlspecialchars($count1, ENT_QUOTES)?>">
            </td>
            <td><?= $subTotal1 ?></td>
        </tr>
        <tr>
            <td><?= $goods2['name'] ?></td>
            <td><?= $goods2['price'] ?></td>
            <td>
            <input type="text" name="count2" value="<?=htmlspecialchars($count2, ENT_QUOTES)?>">
            </td>
            <td><?= $subTotal2 ?></td>
        </tr>
        <tr>
            <th>合計</th>
        </tr>
    </table>
    <p><input type="submit" value="更新"></p>
    </form>
</body>

</html>
