<!-- いろいろなフォームの入力欄 -->

<form action="result.php" method="post">
    
      <!-- この中にinputタグを記述していきます。 --> 
      私の名前：<input type="text" name="my_name" /><br><br>
      パスワード：<input type="password" name="password" /><br><br>
      <!-- <input type="submit" value="送信するよ！" /><br><br> -->
      性別：
          <input type="radio" name="sex" value="男性">男性
          <input type="radio" name="sex" value="女性">女性 <br><br>
      
      <input type="hidden" name="hidden_param" value="隠しパラメータから" />
      <!-- <input type="submit" value="送信するよ！" /><br> -->

      年齢：
        <select name="age">
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        </select><br><br>

    <select name="number">
        <?php for ($i=1;$i<=50;$i++){ ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>
            </option>
        <?php } ?>
    </select><br><br>
    <input type="submit" value="送信するよ！" /><br>


    <!-- 課題 -->
    <h1>課題</h1>
    お名前：<input type="text" name="k_name" /><br>
    ご希望商品：
            <input type="radio" name="goods" value="A賞" />A賞
            <input type="radio" name="goods" value="B賞" />B賞
            <input type="radio" name="goods" value="C賞" />C賞<br>
    個数：
         <select name="number">
            <?php for ($a=1;$a<=10;$a++){ ?>
                <option value="<?php echo $a; ?>">
                <?php echo $a; ?>
                </option>
            <?php } ?>
         </select><br>
         <input type="submit" value="申込" /><br><br><br>
</form>

<?php
  echo "IT用語";
  echo "<br><br>";

  echo "モジュール<br>";
  echo "モジュールとは、部品を意味する言葉であり、部品単独でも動作することは可能だが、他の部品と組み合わせて使用するものです。";
  echo "<br><br>";


  echo "バージョン管理システム<br>";
  echo "バージョン管理システムとは、ファイルに対して「誰が」「いつ」「何を変更したか」というような情報を記録することで、過去のある時点の状態を復元したり変更内容の差分を表示できるようにするシステムのことです。";
  echo "<br><br>";



  echo "サブクエリ<br>";
  echo "サブクエリとは、データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のこと。クエリ内のクエリのこと。";
  echo "<br><br>";
?>
