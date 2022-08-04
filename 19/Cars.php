<?php
interface Engine
{
    public function drive();
}

class Cars implements Engine
{
    private $maker;
    private $customer;

    /**
     * 乗車する人と車種をプロパティに追加
     *
     * @param string $m
     * @param string $c
     */
    public function __construct(string $m = '私', string $c = 'BMW')
    {
        $this->maker    = $m;
        $this->customer = $c;
    }

    /**
     * 乗車する人と車種のメッセージを返す
     *
     * @return string
     */
    public function rideOnCar(): string
    {
        return $this->customer . 'は' . $this->maker . 'の車に乗っています。<br> ';
    }

    /**
     * 運転時のエンジン音を返す
     *
     * @return string
     */
    public function drive(): string
    {
        return 'ブロロロロ〜<br>';
    }
}
