<?php

/**
 * Index page
 * 
 * If loged in, show database names and each name linked to selected database's database.php.
 * 
 * PHP version 5
 *
 * LICENSE: OpenSource
 * 
 * @author		Khaschuluu Munkhbayar <khaschuluu.m@gmail.com>
 * @link		http://github.com/khaschuluu/miskuel/blob/master/database.php
 * @since		File avalable since frist commit
 */

	// Create database.
	if (isset($_POST['create_database_name'])) {
		include 'db.php';
		$result = mysqli_query($connection, 'CREATE DATABASE ' . $_POST['create_database_name']);
		mysqli_close($connection);
	}
	
	if (isset($_GET['drop_database_name'])) {
		include 'db.php';
		$result = mysqli_query($connection, 'DROP DATABASE ' . $_GET['drop_database_name']);
		mysqli_close($connection);
	}
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	</head>
	<body>
		<a href="logout.php?logout=true">Logout</a>
		<br />
		<table border=0>
			<tr>
				<th>Database name</th>
				<th></th>
			</tr>
		<?php
			if ($notice != null)
				echo $notice . "<br />";
			// Whow databases
			include 'db.php';
			// $result catch query return
			$result = mysqli_query($connection, 'SHOW DATABASES;');
			if (mysqli_affected_rows($connection)) {
				// $batabases - Database names
				while (list($databases) = mysqli_fetch_array($result)) {
					echo "<tr><td><a href=\"database.php?database_name=" . $databases . "\">" . $databases . "</a></td><td><input type=\"button\" value=\"-\" onclick=\"window.location.href='index.php?drop_database_name=" . $databases . "'\"></td><tr>\n";
				}
			}
			mysqli_close($connection);
		?>
		<tr>
		<form action="index.php" method="POST" name="index">
				<td><input type="text" name="create_database_name" /></td>
				<td><input type="submit" value="+" /></td>
		</form>
		</tr>
	</body>
</html>
