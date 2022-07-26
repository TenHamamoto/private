<?php
// +----------+----------+----------+
// |   名前    |   年齢   |  ポイント |
// +----------+----------+----------+
// |太郎様     |32歳      |320pt     |
// +----------+----------+----------+
// |次郎様     |21歳      |180pt     |
// +----------+----------+----------+
// |三郎様     |30歳      |240pt     |
// +----------+----------+----------+
// |四郎様     |28歳      |80pt      |
// +----------+----------+----------+
// |五郎様     |24歳      |480pt     |
// +----------+----------+----------+
// |   平均    |27歳      |260pt     |
// +----------+----------+----------+
$memberList = [
    ['name' => '太郎', 'age' => 32, 'point' => 320],
    ['name' => '次郎', 'age' => 21, 'point' => 180],
    ['name' => '三郎', 'age' => 30, 'point' => 240],
    ['name' => '四郎', 'age' => 28, 'point' =>  80],
    ['name' => '五郎', 'age' => 24, 'point' => 480]
];
$totalAge   = 0;
$totalPoint = 0;
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
            <?php foreach ($memberList as $member):?>
            <?php
                $totalAge   += $member['age'];
                $totalPoint += $member['point'];
            ?>
            <tr>
                <td><?=$member['name']?></td>
                <td><?=$member['age']?>歳</td>
                <td><?=$member['point']?>pt</td>
            </tr>
            <?php endforeach;?>
            <tr>
                <th>平均</th>
                <td><?=$totalAge   / count($memberList)?>歳</td>
                <td><?=$totalPoint / count($memberList)?>pt</td>
            </tr>
        </table>
        <?php
        $totalAge   = 0;
        $totalPoint = 0;
        ?>
        <table>
            <caption>forの一覧</caption>
            <tr>
                <th>名前</th>
                <th>年齢</th>
                <th>ポイント</th>
            </tr>
            <?php for ($i = 0; $i < count($memberList); $i++):?>
            <?php
                $totalAge   += $memberList[$i]['age'];
                $totalPoint += $memberList[$i]['point'];
            ?>
            <tr>
                <td><?=$memberList[$i]['name']?></td>
                <td><?=$memberList[$i]['age']?>歳</td>
                <td><?=$memberList[$i]['point']?>pt</td>
            </tr>
            <?php endfor;?>
            <tr>
                <th>平均</th>
                <td><?=$totalAge   / count($memberList)?>歳</td>
                <td><?=$totalPoint / count($memberList)?>pt</td>
            </tr>
        </table>
</body>

</html>
