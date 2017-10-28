<?php
	session_start();
    ob_start();

    if(empty($_SESSION['user_id'])){
		header('location: login.php');
	}
    include("../connect/header.php");

?>

<html>
	<head>
		<meta charset="utf-8">
		<title> Alpha Watches Customer </title>
	</head>	

	<body>
		
	</body>
</html>
