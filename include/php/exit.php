<?php
session_start();


$_SESSION['login_admin_check']= null;
$_SESSION['adminka']= null;


header("Location:../index.php");
?>