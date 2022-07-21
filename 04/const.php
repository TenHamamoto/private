<?php
// 定数は慣習としてコンスタントケースで定義する。
const ONE_HOUR_SEC = 3600;

/* // define(定義する)関数で指定も可能
define('DB_NAME', 'mydb'); */

/* // 文字列結合を使用する
echo '１時間は' . ONE_HOUR_SEC . '秒だ'; */

const DB_HOST = loclhost;
const DB_NAME = mybd;
const DB_USER = root;
const DB_PASS = secret;

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
?>
