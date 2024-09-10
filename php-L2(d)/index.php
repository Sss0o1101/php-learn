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