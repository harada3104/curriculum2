<?php
//POST送信で送られてきた名前を受け取って変数を作成
$text = $_POST["text"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$port = ["80","22","20","21"];
$web = ["PHP","Python","JAVA","HTML"];
$mysql =["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$seikai = $port[0];
$seikai2 = $web[3];
$seikai3 = $mysql[1];
?>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="reset.css">


<div id="space">
    <!--POST通信で送られてきた名前を出力-->
  <p class="p">お疲れ様です<?php echo $text;?>さん</p>
  <!--フォームの作成 通信はPOST通信で-->
  <form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
      foreach ($port as $p)
      { ?>
        <label><input type="radio" value="$p"><?php echo $p .'</label>';
      }
    ?>


    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
      foreach ($web as $w)
      { ?>
        <label><input type="radio"><?php echo $w .'</label>';
      }
      ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    
    <?php
        foreach ($mysql as $m)
        { ?>
          <label><input type="radio"><?php echo $m.
          '</label>';
        }
      ?> 
      <?php echo "<br>";?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="text" value="<?php echo $text;?>">
    <input type="submit" value="回答する" >
  </form>
</div>