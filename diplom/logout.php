<?php session_start();
session_destroy();
setcookie('id-user',null,-1,'/');
setcookie('hash',null,-1,'/');
header('Location:index.php');
?>