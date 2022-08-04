<?php
$profile = [
    '名前'   => '山田太郎',
    '誕生日' => '1990-03-15',
    '住所'   => '東京'
    ];
$editors = [
    'VSCode'   => 'MicroSoft',
    'PhpStorm' => 'GitHub',
    'Atom'     => 'MicroSoft',
    'Eclipse'  => 'IBM',
    'AEM'      => 'Adobe'
];
foreach ($editors as $key => $value) {
    echo $key . 'は' . $value . '社開発です。<br>';
    }
