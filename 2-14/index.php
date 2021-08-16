<!-- 便利な関数（配列） -->

<?php
// 要素の数を数える
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members)."<br>";

// 要素の並べ替え
sort($members);
var_dump($members); echo "<br>";

$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers); echo "<br><br>";
?>

<?php
// 配列に中にある要素が存在しているか
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $members)); echo "<br><br>";

if (in_array("tanaka", $members)) 
{
  echo "田中さんがいるよ！";
} else {
  echo "田中さんはいないよ！";
}  echo "<br><br>";
?>

<!-- 配列を結合して文字列に変換 -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr); echo "<br><br>";
?>

<!-- 文字列を指定の区切りで配列にする -->
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr); echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members); echo "<br><br>";

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
?>


<!-- 課題 -->
<h1>課題</h1>
<?php
// count
$members = ["rinngo", "gorira", "rappa", "panntu"];
echo count($members)."<br>";

// sort
sort($members);
var_dump($members); echo "<br>";

$numbers = [600, 69, 1000, 240, 7];
sort($numbers);
var_dump($numbers); echo "<br><br>";
?>

<!-- in_array -->
<?php
$members = ["rinngo", "gorira", "rappa", "panntu"];
if (in_array("panntu", $members)) 
{
  echo "パンツだ！！";
} else {
  echo "どこだ！パンツ！";
} echo "<br>";
?>

<!-- implode -->
<?php
$members = [100, "佐々木", 777, "スロット", "内田"];
$atstr = implode("@", $members);
var_dump($atstr); echo "<br><br>";
?>

<!-- explode -->
<?php
$members = [100, "佐々木", 777, "スロット", "内田"];
$atstr = implode("@", $members);
var_dump($atstr); echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members); echo "<br>";
?>

<?php
$str = "今日の,晩御飯は,アクアパッツァだった、,オシャレ過ぎて,
軽くひいた";
$array = explode(",",$str);
var_dump($array);
?>