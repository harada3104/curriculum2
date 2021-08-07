<?php
  echo "IT用語";
  echo "<br><br>";

  echo "パフォーマンス";  echo "<br>";
  echo "パフォーマンスとは、特定の物に対してこの言葉を使うのであれば、その物の現状の性能を指す意味として使われる。";
  echo "<br><br>";
?>


<?php
  echo "スロークエリ";  echo "<br>";
  echo "スロークエリとは、データベースに対して命令したクエリの中の実行時間が一定の基準を超える遅いクエリの事を指す。";
  echo "<br><br>";
?>


<?php
  echo "クエリログ";  echo "<br>";
  echo "クエリログとは、サーバが実行したすべてのSQLクエリを記録した履歴のような物。";  echo "<br>";
  echo "初期段階では機能しな為、別途設定が必要。";
  echo "<br><br>";
?>



<?php

for ($a = 1; $a <= 100; $a++) {
  if (($a % 3 === 0) && ($a % 5 === 0)){
    echo "FizzBuzz!"; echo "<br>";
  } elseif ($a % 3 === 0) {
    echo "Fizz!"; echo "<br>";
  } elseif ($a % 5 === 0) {
    echo "Buzz!"; echo "<br>";
  }  else {
    echo $a; echo "<br>";
  }
}
?>