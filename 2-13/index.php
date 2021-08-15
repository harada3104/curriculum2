<!-- 数学に関する関数 -->
<?php
    $x = 5.2;
    // 切り上げ
    echo ceil($x)."<br><br>";


    // 切り捨て
    echo floor($x)."<br><br>";


    // 四捨五入
    echo round($x)."<br><br>";
?>

<!-- 円周率 -->
<?php
    echo pi();
    
    function circleArea($r) 
    {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が2の円の面積の計算
    circleArea(2); echo "<br><br>";
?>

<?php
// 乱数
    echo mt_rand(1, 100); echo "<br><br>";
?>

<!-- 文字列に関する関数 -->
<?php
// 文字列の長さ
    $str = "hogehoge";
    echo strlen($str); echo "<br><br>";
?>

<?php
// 検索
    $str = "yoneyama";
    echo strpos($str, "a"); echo "<br><br>";

    // 文字列の切り取り
    echo substr($str, -2, 2); echo "<br><br>";
?>

<?php
    // 置換
    echo str_replace("neya", "NEYA", $str); echo "<br><br>";
?>
<?php
    $str = "I am Yoneyama";
    echo str_replace(" ", "", $str); echo "<br><br>";
?>

<!-- 日本語はマルチバイト文字列 -->
<?php
    $str = "あいうえお";
    
    echo strlen($str); echo "<br><br>";

    echo mb_strlen($str); echo "<br><br>";
    // 「mb」=> マルチバイト
?>


<!-- 表示の関する関数 -->
<!-- フォーマット化した文字列を出力 -->
<?php
    $name = "米山さん";
    $limit_number = 40;

    echo $name."の残り時間はあと".$limit_number."です"."<br>";
    printf("%sの残り時間はあと%dです", $name, $limit_number); echo "<br>";
?>
<?php
    $name = "米山さん"; $limit_time = 40; $price = 4000; printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price); echo "<br>";
?>
<?php
     $limit_hour = 20;
     $limit_minute = 10;
     printf("残り%02d時間%02d分", $limit_hour, $limit_minute); echo "<br>";
     
     $limit_hour = 4;
     $limit_minute = 4;
     printf("残り%02d時間%02d分", $limit_hour, $limit_minute); echo "<br>";
?>

<!-- 変数に代入できるprintf -->
<?php
    $limit_hour = 4;
    $limit_minute = 4;
    printf("残り%02d時間%02d分", $limit_hour, $limit_minute); echo "<br>";
    
    // sprintfだけでは出力までできない
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time."<br><br><br>";
?>


<!-- 課題 -->
<h1>課題</h1>

<?php
    $X = 7.3;
    $y = 13.7;
    $z = 9.6;

    // ceil
    echo ceil($X).','.ceil($y).','.ceil($z)."<br>";
    // floor
    echo floor($X).','.floor($y).','.floor($z)."<br>";
    // round
    echo round($X).','.round($y).','.round($z)."<br>";
    // mt_rand
    echo mt_rand(1, 15)."<br><br>";
?>

<?php
    // strlen
     $str = "harada";
     echo strlen($str)."<br>";
    // strpos
    echo strpos($str, "a")."<br>";
    // substr
    echo substr($str, 2, 4)."<br>";
    // str_replace
    echo str_replace("harada", "HARADA", $str)."<br>";
?>

<?php
    // printf
    $name = "私";
    $limit_number = 12;

    printf("%sの財布の中身はあと%d円です", $name, $limit_number);
    echo "<br><br>";
?>