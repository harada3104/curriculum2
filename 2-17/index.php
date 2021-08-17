<!-- EXTRA問題 -->

<!-- ループ文 × 条件分岐 -->
<?php
  // 定数40を作る
  define("GOAL", 40);

  // サイコロの累計の受け皿
  $total = 0;

  // GOALに到るまでの回数を定義する為のループ文
  for ($i = 1; $i <= GOAL; $i++) 

  // ループ文の枠の中で条件分岐をする
  {
    // 乱数でサイコロを作成
      $n = mt_rand(1, 6);

    // 加算代入演算子でサイコロを振った結果を変数$totalに蓄積させる
      $total += $n;

      echo "{$i}回目={$n}"."<br>";

      if ($total >= GOAL) 
      {
          echo "合計{$i}回でゴールしました";

          // 条件処理を終わらせる
          break;
      }
  } echo "<br><br>";
?>



<!-- 関数 × 条件分岐 -->
<?php

// タイムゾーンを日本の時間に設定
date_default_timezone_set('Asia/Tokyo');
// date()関数で24時間単位にフォーマット
$time = date('G');

if (0 <= $time && $time <= 5){
    echo "今{$time}時台です<br>おやすみなさい";
} else if (6 <= $time && $time <= 12 ){
  echo "今{$time}時台です<br>おはようございます";
}  else if (13 <= $time && $time <= 18){
    echo "今{$time}時台です<br>こんにちは";
} else if (19 <= $time && $time <= 24){
    echo "今{$time}時台です<br>こんばんは";
} 



?>