<?php
$memberList = [
    ['name' => '太郎', 'age' => 32, 'point' => 320],
    ['name' => '次郎', 'age' => 21, 'point' => 180],
    ['name' => '三郎', 'age' => 30, 'point' => 240],
    ['name' => '四郎', 'age' => 28, 'point' =>  80],
    ['name' => '五郎', 'age' => 24, 'point' => 480]
];

$totalAge = 0;
$totalPoint = 0;

$count = count($memberList);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員リスト</title>
    <style>
        table {
            border-collapse: collapse;
            width: 800px;
            margin: 0 auto 50px;
        }

        th,
        td {
            border: 1px solid #666;
            padding: 15px;
        }

        th,
        tr:nth-child(even) {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <table>
        <caption>foreachの一覧</caption>
        <tr>
            <th>名前</th>
            <th>年齢</th>
            <th>ポイント</th>
        </tr>
        <?php foreach ($memberList as $member) : ?>
            <tr>
                <td><?= $member['name'] ?>様</td>
                <td><?= $member['age'] ?>歳</td>
                <td><?= $member['point'] ?>pt</td>
            </tr>
            <?php $totalAge += $member['age'] ; ?>
            <?php $totalPoint += $member['point'] ; ?>
        <?php endforeach; ?>
        <tr>
            <th>合計</th>
            <td><?= $totalAge / $count ?>歳</td>
            <td><?= $totalPoint / $count ?>pt</td>
        </tr>
    </table>
    <?php $totalAge = 0; ?>
    <?php $totalPoint = 0; ?>
    <table>
        <caption>forの一覧</caption>
        <tr>
            <th>名前</th>
            <th>年齢</th>
            <th>ポイント</th>
        </tr>
        <?php for ($i = 0; $i < count($memberList); $i++) : ?>
            <tr>
            <td><?= $memberList[$i]['name'] ?>様</td>
            <td><?= $memberList[$i]['age'] ?>歳</td>
            <td><?= $memberList[$i]['point'] ?>pt</td>
            </tr>
            <?php $totalAge += $memberList[$i]['age'] ; ?>
            <?php $totalPoint += $memberList[$i]['point'] ; ?>
        <?php endfor; ?>
        <tr>
            <th>合計</th>
            <td><?= $totalAge / $count ?>歳</td>
            <td><?= $totalPoint / $count ?>pt</td>
        </tr>
    </table>
</body>

</html>