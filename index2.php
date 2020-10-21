<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car
{

    // 変数を宣言。値は入れない。
    // publicではなく、private $name;にすることで、自分のクラスの内側からのみ参照と呼び出しが可能。
    private $name;
    private $number;
    private $color;


    // Carクラスの値の初期値を設定的...?
    // $name：ランクル
    // $number：100
    // $color：black
    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }


    ////ここから取得（get）

    // nameの取得
    // privateにしてもnameを取得（get）できる関数
    public function getName()
    {
        return $this->name;
    }

    // numberの取得
    // privateにしてもnumberを取得（get）できる関数
    public function getNumber()
    {
        return $this->number;
    }

    // colorの取得
    // privateにしてもcolorを取得（get）できる関数
    public function getColor()
    {
        return $this->color;
    }



    ////ここから設定（set）

    // nameの設定
    // privateにしてもnameを設定（set）できる関数
    public function setName($name)
    {
        $this->name = $name;
    }

    // numberの設定
    // privateにしてもnumberを設定（set）できる関数
    public function setNumber($number)
    {
        $this->number = $number;
    }

    // colorの設定
    // privateにしてもcolorを設定（set）できる関数
    public function setColor($color)
    {
        $this->color = $color;
    }


    public function infomation()
    {
        echo '車の車種：' . $this->name . '、車体番号：' . $this->number . '、カラー：' . $this->color . 'です。<br>';
    }
}


class Taxi extends Car
{
    // $passenger = 現在の乗車人数（空っぽ）
    private $passenger;


    // $pickUp = 乗車してきた人数
    // pickUp(3)の「3」を$pickUpにいれる。
    public function pickUp($pickUp)
    {
        // pickUp(3)の「3」を現在の乗車人数変数 $passengerにいれる(足す)。
        $this->passenger = $this->passenger + $pickUp;
    }

    // $lowerPassenger = 降車した人数
    // pickUp(2)の「2」を$lowerPassengerにいれる。
    public function lower($lowerPassenger)
    {
        // 現在の乗車人数 から 降車した人数を差し引く
        $this->passenger = $this->passenger - $lowerPassenger;

        // もし現在の乗車人数が0以上だったら
        if ($this->passenger >= 0) {
            // 降車した人数（$lowerPassenger）を表示
            echo $lowerPassenger . '人降車しました';

            // もし現在の乗車人数が0未満だったら  
        } else {
            echo '降車人数に誤りがあります';
        }
    }

    // Carクラスから引き継いだ関数「$this->getName()」「$this->getNumber()」「$this->getColor()」
    // Taxiクラスで定義した変数「$this->passenger」
    public function infomation()
    {
        echo '車の車種：' . $this->getName() . '、' . '車体番号：' . $this->getNumber() . '、' . 'カラー：' . $this->getColor() . '、' . '乗車人数は' . $this->passenger . '人です。';
    }
}




// 以下を実行した時にエラーがでないようにして下さい
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);
