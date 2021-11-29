<?php
session_start();


$_SESSION['login_admin_check']= null;



header("Location:../index.php");
?>