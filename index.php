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
 * @category
 * @package
 * @author		Khaschuluu Munkhbayar <khaschuluu.m@gmail.com>
 * @author
 * @copyright
 * @license
 * @version
 * @link		http://github.com/khaschuluu/miskuel/blob/master/database.php
 * @see
 * @since		File avalable since frist commit
 * @deprecated
 */

	// Create database.
	if (isset($_POST['create_database_name'])) {
		include 'db.php';
		$result = mysqli_query($connection, 'CREATE DATABASE ' . $_POST['create_database_name'] . ";");
		mysqli_close($connection);
	}
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	</head>
	<body>
		<?php
			if ($notice != null)
				echo $notice . "<br />";
			// Whow databases
			include 'db.php';
			// $result catch query return
			$result = mysqli_query($connection, 'SHOW DATABASES;');
			if (mysqli_affected_rows($connection)) {
				echo "Databases are:<br />";
				// $batabases - Database names
				while (list($databases) = mysqli_fetch_array($result)) {
					echo " -> <a href=\"database.php?database_name=" . $databases . "\">" . $databases . "</a><br />";
				}
			}
			mysqli_close($connection);
		?>
		<br />
		Create database:
		<form action="index.php" method="POST" name="index">
			New database name:
				<input type="text" name="create_database_name" />
				<input type="submit" value="create" />
		</form>
	</body>
</html>
