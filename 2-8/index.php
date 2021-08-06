<!-- 配列の中の要素を全て出力する -->

<?php
$fruits = ["りんご", "みかん", "もも"];

echo $fruits[0];
echo $fruits[1];
echo $fruits[2];echo "<br>";
?>

<?php
$fruits = ["りんご", "みかん", "もも"];

foreach ($fruits as $value) {
  echo $value;
} echo "<br>";
?>

<!-- 連想配列の場合 -->
<?php
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];

foreach ($fruits as $key => $value) {
  echo $key;
  echo $value;
} echo "<br><br>";
?>

<?php
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];

foreach ($fruits as $key => $value) {
  var_dump ($key);
  var_dump ($value);
} echo "<br><br>";
?>


<!-- 課題 -->
<?php
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];
$a = "といったら";

foreach ($fruits as $key => $value) {
  echo $key;
  echo $a,$value;echo "<br>";
} echo "<br><br>";
?>


<?php
  echo "IT用語";
  echo "<br><br>";

  echo "トランザクション";  echo "<br>";
  echo "トランザクションとは結果の整合性が要求される、複数の処理を1つにまとめたもの。";  echo "<br>";
  echo "トランザクションを実行した結果は成功か失敗のいずれかしかない。";echo "<br>";
  echo "失敗の場合は実行前に戻る。";
  echo "<br><br>";
?>

<?php
  echo "排他ロック";  echo "<br>";
  echo "排他ロックとは複数人が同時にアクセスし変更を加える事でトラブルが起きるような物に対して、一人がアクセスする際、他者が介入できないようロックをかける事。"; 
  echo "<br><br>";
?>

<?php
  echo "チューニング";  echo "<br>";
  echo "チューニングとは、特定の何かを現状に合わせて最適化する（調整する）事である。"; 
?>