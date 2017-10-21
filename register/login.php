<html>
	<head>
			<?php 
			ob_start(); 
			include("../final/heading.php");
			?>
			<link href="reg.css" type="text/css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 
	</head>

	<body>
			<form method = 'post' action = ''>
			<div class="form-group col-md-4 forms">
				<input type = 'email' name = 'email' placeholder = 'email' class="form-control" required>
				<br>
				<input type = 'password' name = 'password' placeholder = 'password' class="form-control" required>
				<br>
				<input type = 'submit' name = 'login' value = 'Login'>
				<br>
				<br>
				No Account? <a href = 'reg.php'>Register here</a>.
			<div>
			</form>
		</center>
	</body>
</html>

<?php
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		if(empty($email) || empty($password)){
			echo "Please fill up all fields.";
		}

		else{
			include '../connect/conn.php';
			$result = $conn2->query("SELECT * FROM reg WHERE email= '". $email ."' AND password = '$password'");
			
			if($result){
			if((preg_match('/\./', $email)) == 0){
				echo "Invalid email address.";
			}
			else if($result->num_rows == 0){
				echo "Invalid Email or Password";
			}
			else{
						$row = $result->fetch_assoc();
						if($row['Status']==2){
							header("location: ../admin/admin.php");
							session_start();
							$_SESSION['user_id'] = $row['user_id'];
						}
						else if($row['Status']==1){
							header("location: ../register/home.php");
							session_start();
							$_SESSION['user_id'] = $row['user_id'];
						}
						else if($row['Status']==0){
							echo "Account not activated";
						}
						else{
							echo "User does not exist";
						}
				}
			}
			else{
				echo "User does not exist";
			}
		}
	}
	
?>