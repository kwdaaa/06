<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car
{

    // 変数を宣言。値は入れない。
    // publicではなく、private $name;にすることで、自分のクラスの内側からのみ参照と呼び出しが可能。
    private $name;
    private $number;
    private $color;


    // 値の初期値を設定的...?
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





// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
// getName関数の中の$this->getName;が実行される
// 
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->infomation();
echo '<br>';
