<?php

class Member
{
    private $name;
    private $age;
    private $address;

    // セッター：代入メソッド
    public function setName($n)
    {
        $this->name = $n;
    }
    public function setAge($n)
    {
        $this->age = $n;
    }
    public function setAddress($n)
    {
        $this->address = $n;
    }
    // ゲッター：参照メソッド
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getAddress()
    {
        return $this->address;
    }

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

/*
$m1 = new Member(); // 生成しただけでは値は空の状態
$m1->name    = '山田太郎'; // 実体化されたプロパティに代入
$m1->age     = 21;
$m1->address = '東京都';

$m2 = new Member(); // 実態ごとに個別の値を保有
$m2->name    = '鈴木次郎';
$m2->age     = 34;
$m2->address = '大阪府';

$m1->showInfo();
$m2->showInfo();
*/

$m3 = new Member();
$m3->setName('高橋三郎'); // セッターを通して値の代入
$m3->setAge(32); // セッターを通して値の代入
$m3->setAddress('神奈川県'); // セッターを通して値の代入

$m3->showInfo();
