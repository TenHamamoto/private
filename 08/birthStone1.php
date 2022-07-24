<?php
$birthStones = [
    '1'  => 'ガーネット',
    '2'  => 'アメジスト',
    '3'  => 'アクアマリン',
    '4'  => 'ダイヤモンド',
    '5'  => 'エメラルド',
    '6'  => 'パール',
    '7'  => 'ルビー',
    '8'  => 'ペリドット',
    '9'  => 'サファイア',
    '10' => 'オパール',
    '11' => 'トパーズ',
    '12' => 'ターコイズ'
];
$month = [
    '1',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    '11',
    '12'
];
$stoneName = [
    'ガーネット',
    'アメジスト',
    'アクアマリン',
    'ダイヤモンド',
    'エメラルド',
    'パール',
    'ルビー',
    'ペリドット',
    'サファイア',
    'オパール',
    'トパーズ',
    'ターコイズ'
];

$month = $_POST['month'];
$stoneName = $birthStones[$month];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>誕生石</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap-reboot.min.css">
    <style>
        div p {
            float: left;
        }
        div select {
            float: left;
        }
        div input {
            margin-left: 5px;
            height: 25px;
            padding-top: 0px;
        }
    </style>
</head>

<body>
    <h1>誕生石</h1>
    <form action="" method="post" novalidate>
        <p><?= $month ?>月の誕生石は<?= $stoneName ?>です！</p>
        <div>
        <p>誕生月を選んでください：</p>
        <select name="month">
            <option value="1">1月</option>
            <option value="2">2月</option>
            <option value="3">3月</option>
            <option value="4">4月</option>
            <option value="5">5月</option>
            <option value="6">6月</option>
            <option value="7">7月</option>
            <option value="8">8月</option>
            <option value="9">9月</option>
            <option value="10">10月</option>
            <option value="11">11月</option>
            <option value="12">12月</option>
        </select>
        <p><input type="submit" value="送信"></p>
        </div>
    </form>
</body>

</html>
