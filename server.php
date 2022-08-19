<h3>ユーザーエージェント</h3>
<?php 
    print $_SERVER['HTTP_USER_AGENT'];
?>
 <br>
<h3>IPアドレス</h3>
<p>アクセスしたのもPHPサーバーがあるのも同じ自分自身なので</p>
<?php 
    print $_SERVER['REMOTE_ADDR'];
?>
<br>
<?php 
    print $_ENV['Path'];
?>