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




// PHPにおける(else if)
echo "Score? ";
$score = (int) fgets(STDIN);

if ($score >= 90) {
    echo "A";
} else {
    echo "Not A";
}
//スコア が 90 点未満だったら、 A 判定じゃなかったという意味で Not A



// PHPにおける、if else(信号機)
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



// PHPにおける、switchを使った条件分岐(信号機)
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



// PHPにおける、forの構文
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

