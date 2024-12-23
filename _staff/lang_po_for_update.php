<?php
	$cookie_name = "lang";
	$cookie_value = "po";
	$id = $_GET['id'];
	
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header("Location: ../update.php?tour={$id}");

?>