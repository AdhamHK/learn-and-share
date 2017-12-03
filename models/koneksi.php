<?php
	$user = "learnand_admin";
	$pass = "@hayukalbu";
	$db = "learnand_stbi";
	$host = "jkt09.dewaweb.com:2083";
	$konek = mysql_connect($host, $user, $pass);
	mysql_select_db($db, $konek);
?>