<?php
Header("Content-Type: text/html;charset=UTF-8");
include("../../include/mysql.php"); // 

?>
<form autocomplete="off" method='POST' action="save.php">
<p>Login:<input type="text" name="login"></p><br>
<p>Pasword:<input type="password" name="password"></p><br>
<p>Email:<input type="email" name="email"></p><br>
<input type="submit" value="OK">
</form>
<a href="../../index.php">назад</a>