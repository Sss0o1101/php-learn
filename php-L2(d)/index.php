 <!-- PHPにおけるifの構文 --> 
 <?php
echo "Score? ";
$score = (int) fgets(STDIN);

if ($score >= 90) {
    echo "A"
} else {
    echo "Not A";
}
//スコアが 90 点以上だったら、A




// PHPにおける(else if) ------------------------------------------------------------------------------
echo "Score? ";
$score = (int) fgets(STDIN);

if ($score >= 90) {
    echo "A";
} else {
    echo "Not A";
}
//スコア が 90 点未満だったら、 A 判定じゃなかったという意味で Not A



// PHPにおける、if else(信号機) ------------------------------------------------------------------------------
<?php
echo "Signal? ";
$signal = trim(fgets(STDIN));    // 前後の空白や改行を除去するには trim()

if ($signal === "red") {
    echo "Stop";
} else if ($signal === "blue") {
    echo "Go";
} else if ($signal === "yellow") {
    echo "Slow down";
} else {
    echo "Wrong signal";
}



// PHPにおける、switchを使った条件分岐(信号機)------------------------------------------------------------------------------
<?php
echo "Signal? ";
$signal = trim(fgets(STDIN));

switch ($signal) {
    case "red":
        echo "Stop";
        break;
    case "blue":
    case "green":
        echo "Go";
        break;
    case "yellow":
        echo "Slow down";
        break;
    default:
        echo "Wrong signal";
        break;
}



// PHPにおける、forの構文 ---------------------------------------------------------------------------------------------------------------------
<?php
for ($i = 0; $i < 3; $i++) {
    echo "{$i} Hello";
}

echo 4 * 1;
echo 4 * 2;
echo 4 * 3;
...
echo 4 * 9;

for ($i = 1; $i <= 9; $i++) {
    echo 4 * $i;
}
//九九の 4 の段



// PHPにおける、whileの構文 ---------------------------------------------------------------------------------------------------------------------
<?php
$money = 500;
while ($money < 1000) {
    $money *= 1.1;
    echo $money;
}
// 500 円のお金があったとして、それが 1 年ごとに 10% ずつ増えていった場合、1000 円を超えるまでの経過を 1 年ごとに繰り返し表示



// PHPにおける、do ... whileの構文 ---------------------------------------------------------------------------------------------------------------------
<?php
do {
    echo "Password? ";
    $password = trim(fgets(STDIN));
} while ($password !== "d0t1nsta11");   //d0t1nsta11(パスワード)
echo "Password matched";
// 今回パスワードを入力してもらって、間違えていたら入力し直してもらうという処理。(入力が何度繰り返されるかわからない、ただし、最初に必ず 1 回は入力してもらいたいので、do while を使えば OK)