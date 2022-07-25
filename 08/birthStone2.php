<?php
$birthStones = [
    '0'  => 'ガーネット',
    '1'  => 'アメジスト',
    '2'  => 'アクアマリン',
    '3'  => 'ダイヤモンド',
    '4'  => 'エメラルド',
    '5'  => 'パール',
    '6'  => 'ルビー',
    '7'  => 'ペリドット',
    '8'  => 'サファイア',
    '9'  => 'オパール',
    '10' => 'トパーズ',
    '11' => 'ターコイズ'
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
$monthMinus = --$month;
$stoneNameMinus = $birthStones[$monthMinus];
$stoneNamePlus = $birthStones[$month];
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
        section {
            display: flex;
        }
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
    <!--
    フォームの1月の送信値が「1」のままの場合：1月を選択した時にアメジストが表示されないように、誕生石名変換の直前に1マイナスする。
    -->
    <section>
    <form action="" method="post" novalidate>
        <p><?= $month ?>月の誕生石は<?= $stoneNameMinus ?>です！</p>
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
    </section>
    <!--
    フォームの1月の送信値を「0」にする場合：0月が結果に表示されないように、表示直前に1プラスする。
    -->
    <section>
    <form action="" method="post" novalidate>
        <p><?= ++$month ?>月の誕生石は<?= $stoneNamePlus ?>です！</p>
        <div>
        <p>誕生月を選んでください：</p>
        <select name="month">
            <option value="0">1月</option>
            <option value="1">2月</option>
            <option value="2">3月</option>
            <option value="3">4月</option>
            <option value="4">5月</option>
            <option value="5">6月</option>
            <option value="6">7月</option>
            <option value="7">8月</option>
            <option value="8">9月</option>
            <option value="9">10月</option>
            <option value="10">11月</option>
            <option value="11">12月</option>
        </select>
        <p><input type="submit" value="送信"></p>
        </div>
    </form>
    </section>
</body>

</html>
