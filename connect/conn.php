<?php
	/*
		this file connects to your database
		include this file to your php page
		if you need database
	*/

	/*
		mysqli_connect paramaters
		host
		username
		password
		database
	*/

	// procedural implementation
	$conn = mysqli_connect("mysql.hostinger.com", "u302811006_root", "affirmative", "u302811006_db");
	//echo mysqli_connect_errno(); // returns 1 if there's an error else 0

	// oop implementation
	$conn2 = new mysqli("mysql.hostinger.com", "u302811006_root", "affirmative", "u302811006_db");
	//echo $conn2->connect_errno;  // returns 1 if there's an error else 0

?>