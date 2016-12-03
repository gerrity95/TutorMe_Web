<?php

/*
This file cannot be added to Github!!!! Must stay local!!!
*/


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'TutorMe_Test');

//Establish connection with the server

		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Selecting the database

		//$db = mysqli_select_db($conn, "php_test");

?>
