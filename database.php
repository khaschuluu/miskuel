<?php

/**
 * Table view
 * 
 * If database is selected, this page show tables from selected database.
 * 
 * PHP version 5
 *
 * LICENSE: OpenSource
 * 
 * @author		Khaschuluu Munkhbayar <khaschuluu.m@gmail.com>
 * @link		http://github.com/khaschuluu/miskuel/blob/master/database.php
 * @since		File avalable since frist commit
 */

?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	</head>
	<body>
		<a href="index.php">Home</a> | 
		<a href="logout.php?logout=true">Logout</a>
		<br />
		<table border=0>
		<?php
			if(!$_GET['database_name'])
				header("Location: index.php");
			else {
				$db = $_GET['database_name'];
				include 'db.php';
				// $result catch query return
				$result = mysqli_query($connection, 'SHOW TABLES;');
				if (mysqli_affected_rows($connection)) {
					echo "<tr><th>Table name</th></tr><h1>" . $_GET['database_name'] . "</h1>";
					// $tables - Table names
					while (list($tables) = mysqli_fetch_array($result)) {
						echo "<tr><td><a href=\"table.php?database_name=" . $_GET['database_name'] . "&table_name=" . $tables . "\">" . $tables . "</a></td></tr>\n";
					}
				} else {
					echo "<h1>" . $_GET['database_name'] . "</h1><br />\nDatabase is <b>empty</b>";
				}
				mysqli_close($connection);
			}
		?>
		</table>
	</body>
</html>
