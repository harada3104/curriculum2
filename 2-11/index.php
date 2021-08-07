<!-- フォームに入力した内容を取得する -->
<form action="result.php" method="post">
  名前：<input type="text" name="my_name" /><br>
  メールアドレス：<input type="text" name="adoresu" /><br>
  パスワード：<input type="password" name="password" /><br>
  <input type="submit" value="送信" /><br><br>
</form>



<?php
  echo "IT用語";
  echo "<br><br>";

  echo "仕様書";  echo "<br>";
  echo "仕様書とは、「何を作るのか？」を説明した資料、最終的に求められる成果物が何なのかを記した物。";  echo "<br>";
  echo "<br><br>";



  echo "設計書";  echo "<br>";
  echo "設計書とは、「どうやって作るのか？」を説明した資料、必要とされる物を作る上でのルールやツール等が記された物";  echo "<br>";
  echo "<br><br>";



  echo "Git";  echo "<br>";
  echo "Gitとはバージョン管理システムのひとつでファイルの変更履歴を管理してくれるシステム。";  echo "<br>";
  echo "<br><br>";



  echo "マージツール";  echo "<br>";
  echo "マージツールとは色々な種類がある。機能としては複数のフォルダやファイルを自動で比較し双方の差異を視覚しやすく表示する等の機能がある。";
?>