<?php

/**
 * Database settings
 * 
 * Database settings for entire project.
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
 * @since		File avalable since 4th commit
 * @deprecated
 */

 	session_start();
	if (!isset($_SESSION['host']) && !isset($_SESSION['username']) && !isset($_SESSION['password']))
		header("Location: login.php");

	// $connection - Database connector object
	$connection = @mysqli_connect($_SESSION['host'], $_SESSION['username'], $_SESSION['password'], $db) or die("Can't connect database.\nError: " . mysqli_connect_error());
?>
