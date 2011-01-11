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

	if(isset($_GET['logout']) && $_GET['logout'] == "true")
		session_start();
	session_destroy();
	header("Location: login.php");

?>
