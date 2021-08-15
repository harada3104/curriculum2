<?php
    $my_name = $_POST['my_name'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $hidden_param = $_POST['hidden_param'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $k_name = $_POST['k_name'];
    $goods = $_POST['goods'];
    $number = $_POST['number'];
?>

    <p>私の名前は<?php echo $my_name; ?>です。</p>
    <p>パスワードは<?php echo $password; ?>です。</p>
    <p>私は<?php echo $sex; ?>です。</p>
    <p>性別は<?php echo $hidden_param; ?>です。</p>
    <p><?php echo $age; ?></p>
    <p><?php echo $number; ?></p><br>


    <p>お名前：<?php echo $k_name; ?></p>
    <p>ご希望商品<?php echo $goods; ?></p>
    <p>個数：<?php echo $number; ?></p>