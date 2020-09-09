<?php 
	session_start();
	$conn = mysqli_connect("localhost", "root", "", "myblog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	define ('ROOT_PATH', 'C:/xampp/htdocs/myblog/');
	define('BASE_URL', 'http://localhost/myblog/');
?>