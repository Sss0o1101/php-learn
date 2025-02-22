<!-- 文字列 -->
<?php echo "Hello world";?>

<!-- 文字列(キャストでデータ変換) -->
<?php
echo "Price? ";
$price = (int) fgets(STDIN);  //(int)は、整数値に変換 また、fgets(STDIN);はユーザーに文字列を入力してもらって、変数で受け取ることが出来る。
// var_dump($price);
echo $price * 1.1;


<!-- 数値のさまざまな表現方法 -->
<?php
echo 10;
echo -8;
echo 2.5;
echo 1_000_000;
echo 1.2e3;
echo 1.2e-3;



// 数値に対して使える、さまざまな演算子
<?php
echo 10 + 3;
echo 10 - 3;
echo 10 * 3;
echo 10 ** 3;
echo 10 / 3;
echo 10 % 3;
echo 10 + 2 * 3;
echo (10 + 2) * 3;



// PHPにおける変数
<?php
echo 150 * 120;
echo 150 * 130;
echo 150 * 140;

$price = 150;
echo $price * 120;
echo $price * 130;
echo $price * 140;



// 変数に値を再代入
<?php
$price = 150;
echo $price * 120 . PHP_EOL;
echo $price * 130 . PHP_EOL;
echo $price * 140 . PHP_EOL;

// $price = 151;
// $price = $price + 1;
// $price += 1;
$price++;
// $price -= 1;
// $price--;
echo $price * 120;
echo $price * 130 . PHP



// PHPにおける定数
<?php
$price = 150;
// $rate = 1.1;
const RATE = 1.1;
echo $price * 120 * RATE;
echo $price * 130 * RATE;
echo $price * 140 * RATE;

$price++;
RATE = 1.08;
echo $price * 120 * RATE;
echo $price * 130 * RATE;
echo $price * 140 * RATE;



// 文字列を表現(テンプレートリテラル)
<?php
echo 'Hello Taro';
echo "Hello Jiro";

$name = "Saburo";
echo "Hello {$name}";
echo 'Hello {$name}';



// ユーザーに文字列を入力してもらう方法
<?php
echo "Your name? ";
$name = fgets(STDIN);    //JavaScriptでは、prompt
echo $name;



// 文字列の連結/文字へのアクセス
<?php
echo "Your name? ";
$name = trim(fgets(STDIN));
// echo "Hello {$name}" . PHP_EOL;
// echo "Hello " . $name . PHP_EOL;
echo $name[0];
echo $name[1];
echo $name[2];
$name[0] = "*";
$name[1] = "*";
$name[2] = "*";
echo $name;