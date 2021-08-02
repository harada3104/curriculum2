 <!-- <?php
$message = "Hello World!!";
var_dump($message);

echo '<br>';
$x = 8;
$y = 5.55;
var_dump($x);
echo '<br>';
var_dump($y);

echo '<br>';
$flag = true;
var_dump($flag);

echo '<br>';
$emp = null;
var_dump($emp);

echo '<br>';
$en_words = 'Hello World';
var_dump($en_words);
echo '<br>';
$ja_words = 'こんにちは';
var_dump($ja_words);

echo '<br>';
define("ADMIN_EMAIL","y-i-group@gmail.com");
define("LIST_COUNT",15);
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;

echo '<br>';
echo "hello"."world";
echo '<br>';
$hello = "Hello";
$world = "World";
echo $hello.$world;

echo '<br>';
echo 1+1;
echo '<br>';
echo 10-1;
echo '<br>';
echo 2*2;
echo '<br>';
echo 10/5;
echo '<br>';
echo 5%3;

// echo '<br>';
// $b++;
// echo $b;
// echo '<br>';
// $c--;
// echo $c;
echo '<br>';
$x = 0;
$x += 5;
echo $x;
echo '<br>';
$x *= 5;
echo $x;
echo '<br>';
?>

<?php
$age = 20;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}   echo "<br>"
?>

<!-- 論理値の条件分岐 -->
<!-- <?php
// 学生かどうか
$is_student = true;

if ($is_student) {
    echo 'あなたは学生です。';
}   echo '<br>';
?> -->

<!-- 複数条件の分岐 -->
<?php
// 年齢
$age = 24;
// 学生かどうか
$is_student = true;

if ($age < 25 && $is_student) {
    echo "学割パックが使えるよ";
} elseif ($age < 25) {
    echo "若者応援割引が使えるよ";
}    echo '<br>';
?>

<!-- <?php
// 例として、血液型を診断する条件分岐
$blood = "B";
if ($blood == "A") {
    echo "A型です";
}   elseif($blood == "B") {
    echo "B型です";
}   elseif($blood == "O") {
    echo "O型です";
}   elseif($blood == "AB") {
    echo "AB型です";
}   else {
    echo "A/B/O/ABから選択してください";
}    echo '<br>';
?>

<!-- 複数条件分岐（switch、case） -->
<?php
$blood = "B";
switch ($blood){
    case"A":
        print"A型です";
        break;
    case"B":
        print"B型です";
        break;
    case"O":
        print"O型です";
        break;
    case"AB":
        print"AB型です";
        break;
    default:
    echo"A/B/O/ABから選択してください";
}   echo '<br>';
?> -->-->

<!-- 三項演算子 -->
<!-- <?php
$name = "";

if ($name != ""){
    echo "名前を受け付けました";
} else {
    echo "名前を入力してください";
}   echo '<br>';
?>

<?php
$name = "";

echo ($name != "") ? "名前を受け付けました" : "名前を入力してください";echo '<br>';
?> -->

<!-- 補足（比較演算子===）について -->
<?php
$string = "1";
$int = 1;

if (1 === $string) {
    echo "変数stringはint型です。";
} else {
    echo "変数stringはstring型です。";
}   echo '<br>';

if (1 === $int) {
    echo "変数stringはint型です。";
} else {
    echo "変数stringはstring型です。";
}   echo '<br>';
?>

<!-- チャレンジ -->
<?php
$namae = "taro";
$pw = "pass";

if ($namae ===  "taro" && $pw === "pass") {
    echo "ログイン成功です";
}  elseif($namae != "taro" && $pw != "pass") {
    echo "入力情報が間違っています";
}  elseif($pw != "pass") {
    echo "パスワードが間違っています。";
}  elseif($namae != "taro") {
    echo "名前が間違っています。";
}   echo '<br>';
?>

<!-- ループ文 -->
<?php
$num = 0;
while ($num < 10) {
    echo $num;
    $num++;
}   echo '<br>';
// do...while
do {
    echo $num;
    $num++;
} while ($num < 10);
echo '<br>';
?>

<!-- for文 -->
<?php
for($i=1;$i<=10;$i++) { 
    echo $num;
}  echo '<br>';
?>

<!-- break -->
<?php
$num = 0;
while ($num < 10) {
    echo $num;
    $num++;
    if ($num == 5) {
        break;
    }
}    echo '<br>';
?>

<!-- チャレンジ -->
<!-- <?php
$num = 0;
while ($num < 101) {
    echo $num;
    $num++; echo '<br>';
}
?> -->
