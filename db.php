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

	$host = 'localhost';	// Host name. Example: localhost etc.
	$user = 'root'; // User name. Exapmle: root etc.
	$pass = ''; // User password. Example: root etc.
	// $connection - Database connector object
	$connection = @mysqli_connect($host, $user, $pass, $db) or die("Can't connect database.\nError: " . mysqli_connect_error());
?>
