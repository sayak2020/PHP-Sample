<?php
	session_start();
	unset($_SESSION["username"]);
	unset($_SESSION["password"]);

	echo " you have cleaned sesion";
	header('Refresh: 2; URL = frontpage.php');
?>       