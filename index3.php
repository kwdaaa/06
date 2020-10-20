<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
Class Car
{
    // 変数を宣言。値は入れない。
    public $getName;
    public $getNumber;
    public $getColor;

    // 値の初期値を設定的な...？
    public function __construct($getName, $getNumber, $getColor)
    {
        $this->getName = $getName;
        $this->getNumber = $getNumber;
        $this->getColor = $getColor;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function getName()
    {
        echo $this->getName;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function getNumber()
    {
        echo $this->getNumber;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function getColor()
    {
        echo $this->getColor;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function getInfomation()
    {
        echo '車の車種：' . $this->getName . '、車体番号：' . $this->getNumber . '、カラー：' . $this->getColor . 'です。<br>';
    }
}


Class Car2
{
    // 変数を宣言。値は入れない。
    public $setName;
    public $setNumber;
    public $setColor;



    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function setName($setName)
    {
        echo $this->setName = $setName;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function setNumber($setNumber)
    {
        echo $setNumber;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function setColor($setColor)
    {
        echo $setColor;
    }

    public function setInfomation()
    {
        echo '車の車種：' . $this->setName . '、車体番号：' . $this->setNumber . '、カラー：' . $this->setColor . 'です。<br>';
    }
}




// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->getInfomation();
echo '<br>';

$car2 = new Car2();

// 車名(車種)を更新
$car2->setName('アルファード');
echo $car2->setName();
echo '<br>';

// 車体番号を取得
$car2->setNumber(200);
echo $car2->setNumber();
echo '<br>';

// カラーを取得
$car2->setColor('red');
echo $car2->setColor();
echo '<br>';

// 車の情報表示を表示
echo $car2->setInfomation();
echo '<br>';