<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
Class Car{

    // 変数を宣言。値は入れない。
    public $getName;
    public $getNumber;
    public $getColor;


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
    public function setName($setName)
    {
        echo $this->getName;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function setNumber($setNumber)
    {
        echo $this->getNumber;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function setColor($setColor)
    {
        echo $this->getColor;
    }

    // クラス内にgetName関数を作った。
    // 「$this->」にすることでクラスないで定義した「$getName;」を拾うことができる。
    public function infomation($infomation)
    {
        echo '車の車種：' . $this->getName . '、車体番号：' . $this->getNumber . '、カラー' . $this->age . 'です。<br>';
    }
}




// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo $getName . '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo $getNumber . '<br>';

// カラーを取得
echo $car1->getColor();
echo $getColor . '<br>';

// 車の情報表示を表示
// echo $car1->infomation();
// echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo $setName . '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo $setNumber . '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo $setColor . '<br>';

// 車の情報表示を表示
// echo $car1->infomation();
// echo '<br>';