<?php

/**
 * Login page
 * 
 * Login for local and remote MySQL databases.
 * 
 * PHP version 5
 *
 * LICENSE: OpenSource
 * 
 * @author		Khaschuluu Munkhbayar <khaschuluu.m@gmail.com>
 * @link		http://github.com/khaschuluu/miskuel/blob/master/database.php
 * @since		File avalable since 5th commit
 */
	session_start();
	if (isset($_SESSION['host']) && isset($_SESSION['username']) && isset($_SESSION['password']))
		header("Location: index.php");

	if (isset($_POST['host']) && isset($_POST['username']) && isset($_POST['password'])) {
		$_SESSION['host'] = $_POST['host'];
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		header("Location: index.php");
	}
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	</head>
	<body>
		<form action="login.php" method="post">
			Host:
				<input type="text" name="host" />
			<br />
			Username:
				<input type="text" name="username" />
			<br />
			Password:
				<input type="password" name="password" />
			<br />
				<input type="submit" value="login" />
		</form>
	</body>
</html>
