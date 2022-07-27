<?php

class Member
{
  public $name;
  public $age;
  public $address;

  // 実体化された時の各プロパティにアクセスして値を参照
  public function showInfo()
  {
    echo '<ul>';
    echo '<li>名前：' . $this->name . '</li>';
    echo '<li>年齢：' . $this->age . '</li>';
    echo '<li>住所：' . $this->address . '</li>';
    echo '</ul>';
  }
}

$m1 = new Member(); // 生成しただけでは値は空の状態
$m1->name    = '山田太郎'; // 実体化されたプロパティに代入
$m1->age     = 21;
$m1->address = '東京都';

$m2 = new Member(); // 実態ごとに個別の値を保有
$m2->name    = '鈴木次郎';
$m2->age     = 34;
$m2->address = '大阪府';

$m1->showInfo(); // 値が含まれた状態で出力
$m2->showInfo();
