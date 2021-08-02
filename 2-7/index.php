<!-- 配列 -->
<?php
$country_1 = "America,";
$country_2 = "Japan,";
$country_3 = "China,";
$country_4 = "Korea";

echo $country_1;
echo $country_2;
echo $country_3;
echo $country_4; echo '<br>';
?>

<?php
$countries = ["America,","Japan,","China,", "Korea"];

echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3]; echo '<br>';

var_dump($countries);
echo '<br>';
?>

<!-- 連想配列 -->
<?php
$fruits = ["りんご", "みかん", "ぶどう"];

echo $fruits[0];
echo "<br>";

echo $fruits[1];
echo "<br>";

echo $fruits[2];
echo "<br>";

var_dump($fruits);
echo "<br>";
?>

<?php
$fruits = ["apple" => "りんご","orange" =>  "みかん","grape" =>  "ぶどう"];

echo $fruits["apple"];
echo "<br>";
echo $fruits["orange"];
echo "<br>";
echo $fruits["grape"];
echo "<br>";
var_dump($fruits);
echo "<br>";
?>

<!-- 要素の追加 -->
<!-- 配列の場合 -->
<?php
$fruits = ["りんご", "みかん", "ぶどう"];
// 番号指定の場合
$fruits[3] = "もも";
// 連番で追加する場合
// $fruits[] = "もも";
var_dump($fruits);
echo "<br>";
?>

<!-- 連想配列の場合 -->
<?php
$fruits = ["apple" => "りんご","orange" =>  "みかん","grape" =>  "ぶどう"];
$fruits ["peach"] = "もも";
var_dump($fruits);
echo "<br>";echo "<br>";echo "<br>";
?>

<!-- 課題 -->
<?php
$color = ["red" => "赤","blue" =>  "青","green" =>  "緑"];
var_dump($color);echo "<br>";
$color ["yellow"] = "黄色";
var_dump($color);echo "<br>";echo "<br>";
?>

<?php
echo "IT用語";echo "<br>";
echo "プルリクエスト（マージリクエスト）";
echo "<br>";
echo "プルリクエストとは、GitHub等で使われる機能（サービス）の名称。";
echo "<br>";
echo "チームでの開発の際に個々の作業結果をチームもしくはリーダーと共有やレビューする事でミスの軽減等に使用する事ができる。";
echo "<br>";echo "<br>";
?>

<?php
echo " Git Flow";echo "<br>";
echo "";
?>