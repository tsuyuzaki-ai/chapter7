<?php session_start();?>
<?php require '../header.php';?>
<?php require 'menu.php';?>
<?php
$name=$address=$login=$password='';

if (isset($_SESSION['customer'])) {
	$name=$_SESSION['customer']['name'];
	$address=$_SESSION['customer']['address'];
	$login=$_SESSION['customer']['login'];
	$password=$_SESSION['customer']['password'];
	$mail=$_SESSION['customer']['mail'];
}
?>

<form class="login" action="customer-output.php" method="post">
<table>
<tr><td>お名前</td><td>
<input type="text" name="name" value="<?=$name?>">
</td></tr>
<tr><td>ご住所</td><td>
<input type="text" name="address" value="<?=$address?>">
</td></tr>
<tr><td>ログイン名</td><td>
<input type="text" name="login" value="<?=$login?>">
</td></tr>
<tr><td>パスワード</td><td>
<input type="password" name="password" value="<?=$password?>">
</td>
<tr><td>メールアドレス</td><td>
<input type="text" name="mail" value="<?=$mail?>">
</td>
</table>
<input type="submit" value="確定">
</form>
<?php require '../footer.php';?>