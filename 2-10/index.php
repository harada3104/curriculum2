<!-- 関数 -->

<?php

// 1)
// 底面
$base1 = 10;
// 高さ
$height1 = 5;
// 面積 
$area1 = $base1 * $height1 / 2;
echo $area1; echo "<br>";

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;
echo $area2; echo "<br>";

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;
echo $area3; echo "<br><br>";
?>


<?php
function getTriangleArea($base, $height) 
{
  $area = $base * $height / 2;
  echo "三角形の面積は".$area."だよ。";
}

// 1)
getTriangleArea(10,5);
// 2)
getTriangleArea(15,8);
// 3)
getTriangleArea(8,6);
echo "<br><br>";
?>


<!-- 補足〜ローカル変数〜 -->


<?php
$myname = "ruby";

function sayHi($name = "goto") 
{
    // 関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}

echo sayHi(); echo "<br>";
echo $myname;
echo "<br><br>";
?>



<!-- 課題 -->
<?php
function taiseki ($tate,$yoko,$takasa) 
{
  $X = $tate * $yoko * $takasa;
  echo "直方体の体積は".$X."です。";
}

taiseki(5,10,8);
echo "<br><br>";
?>



<?php
  echo "IT用語";
  echo "<br><br>";

  echo "ハッシュ化";  echo "<br>";
  echo "ハッシュ化とはハッシュ関数に値を入れてハッシュ値に変換する事です。";  echo "<br>";
  echo "パスワード等の重要な情報をハッシュ化する事でセキュリティ対策として有効である。";
  echo "<br><br>";
?>


<?php
  echo "総合テスト";  echo "<br>";
  echo "総合テストとは、システム開発における工程のひとつ、単体テストと結合テストの後の工程。";  echo "<br>";
  echo "開発した物が意図したシステムとして機能しているか確認する作業。";
  echo "<br><br>";
?>


<?php
  echo "デバッグ";  echo "<br>";
  echo "デバッグとは、バグを見つけて改修する作業の総称。";
?>