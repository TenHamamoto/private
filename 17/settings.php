<?php
const SMTP_HOST     = 'smtp.gmail.com';
const SMTP_PORT     = 587;
const SMTP_PROTOCOL = 'tls';
const GMAIL_SITE    = 'filmbarong10@gmail.com';
const GMAIL_APPPASS = 'tdwugehawuesoaij';
// 代替テキスト(送信元のGmailでOK)
const MAIL_FROM     = ['filmbarong10@gmail.com' => '公式サイト'];
// 複数の送信先の設定
const MAIL_TO       = [
    'filmbarong10@gmail.com'  => 'Web担当者様',
    't.hamamoto@ebacorp.jp' => '営業担当者様'
];
const MAIL_TITLE    = 'タイトル';

// 結合が多いほど処理が遅くなる
$text = "文字列結合は" . "\n"
    . "改行を自身で" . "\n"
    . "結合する";

echo $text;
// 文字列結合は 改行を自身で 結合する

// pre要素で囲めば\nは仮想サーバでも改行可能
echo '<pre>' . $text . '</pre>';
// 文字列結合は
// 改行を自身で
// 結合する

$text = "複合演算子の";
$text .= "使用も";
$text .= "できる";
