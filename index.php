<?php
if (isset($_COOKIE['sessionid']) && $_COOKIE['sessionid'] == 'a98ef0a02e476aeee76477cd4b14fe24db707736') {
	setcookie('sessionid', 'a98ef0a02e476aeee76477cd4b14fe24db707736', time() + (86400 * 30), "/");
	header("Location: dashboard.php");
	exit;
} else {
	setcookie('sessionid', 'd65393bb7462ae799e87634a28b8cd20cd10bfaa', time() + (86400 * 30), "/");
	header("Location: login.php");
	exit;
}
