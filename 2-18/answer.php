<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$text = $_POST["text"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="reset.css">

<div id="space">
  <!--POST通信で送られてきた名前を表示-->
  <p><?php echo $text;?>さんの結果は・・・？</p>
  <p>①の答え</p>
  <!--作成した関数を呼び出して結果を表示-->

  <p>②の答え</p>
  <!--作成した関数を呼び出して結果を表示-->

  <p>③の答え</p>
  <!--作成した関数を呼び出して結果を表示-->
</div>