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
		<a href="database.php?database_name=<?php echo $_GET['database_name'] ?>">Back</a> | 
		<a href="logout.php?logout=true">Logout</a>
		<br />
		<table border=0>
		<?php
			if(!isset($_GET['database_name']) && !isset($_GET['table_name']))
				header("Location: index.php");
			else {
				$db = $_GET['database_name'];
				include 'db.php';
				// $result catch query return
				$result = mysqli_query($connection, 'SELECT * FROM ' . $_GET['table_name']);
				if (mysqli_affected_rows($connection)) {
					echo "<h1>" . $_GET['database_name'] . "</h1><h3>" . $_GET['table_name'] . "</h3><b>Column name</b><br />";
					// $tables - Column names
					while (list($tables, $blah) = mysqli_fetch_array($result)) {
						echo $tables . " | " . $blah . "<br />\n";
					}
				} else {
					echo "<h1>" . $_GET['table_name'] . "</h1><br />\nTable is <b>empty</b>";
				}
				mysqli_close($connection);
			}
		?>
		</table>
	</body>
</html>
