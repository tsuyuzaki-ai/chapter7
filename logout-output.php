<?php session_start();?>
<?php require '../header.php';?>
<?php require 'menu.php';?>
<?php
if (isset($SESSION['customer'])){
  unset($SESSION['customer']);
  echo 'ログアウトしました｡';
}else{
  echo 'すでにログアウト済みです｡';
}
?>
<?php require '../footer.php';?>