<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>
<form class="login" action="login-output.php" method="post">
ログイン名<input type="text" name="login"><br>
パスワード<input type="password" name="password"><br>
<input type="submit" value="ログイン">
</form>
<?php require '../footer.php'; ?>