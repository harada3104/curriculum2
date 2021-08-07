<?php
$my_name = $_POST['my_name'];
$adoresu = $_POST['adoresu'];
$password = $_POST['password'];

var_dump($_POST);
echo "<br><br>";
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>メールアドレスは、<?php echo $adoresu; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>