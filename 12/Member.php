<?php
class Member
{
    private $name;
    private $age;
    private $address;

    /**
     * 初期値の追加
     *
     * @param string $name
     * @param integer $age
     * @param string $address
     */
    public function __construct(string $n, int $ag, string $add)
    {
        $this->name    = $n;
        $this->age     = $ag;
        $this->address = $add;
    }

    public function showInfo()
    {
        echo '<ul>';
        echo '<li>名前：' . $this->name . '</li>';
        echo '<li>年齢：' . $this->age . '</li>';
        echo '<li>住所：' . $this->address . '</li>';
        echo '</ul>';
    }
}
