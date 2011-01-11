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

	// database_name is selected database's name from index.php
	if(!$_GET['database_name'])
		header("Location: index.php");
	else {
		$db = $_GET['database_name'];
		include 'db.php';
		// $result catch query return
		$result = mysqli_query($connection, 'SHOW TABLES;');
		if (mysqli_affected_rows($connection)) {
			echo $_GET['database_name'] . " -> Tables are:<br />";
			// $tables - Table names
			while (list($tables) = mysqli_fetch_array($result)) {
				echo " -> " . $tables . "<br />";
			}
		} else {
			echo $_GET['database_name'] . " -> Empty set";
		}
		mysqli_close($connection);
	}
?>
