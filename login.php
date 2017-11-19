<?php
    ob_start();
?>
<html>
	<head>
	<?php
		include("heading.php");
		ob_start();
	    require_once("connect/conn.php");

		if(!empty($_SESSION['logged_in'])){
			# Edit by Vlad
			# It should not destory the session,
			# if it is destroyed, then basically we have 2 logout functionalities

			if($_SESSION['status'] == 1){
			    header('location: home.php');
		        }
		        else if($_SESSION['status'] == 2){
    				header('location: admin/admin.php');
		        }
		        else if($_SESSION['status'] == 0){
				header('location: unactivated.php');
   		         }

		}
	?>
		<link href="css/reg.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 
	</head>

	<body>
	<div class="col-md-12">
	<div class="col-md-6">
		<h3 id="login">Login</h3>
		<p id="r">Registered Customers</p>
		<hr id="hr">
		<p id="registered">For registered customers, login using your email address</p>
	
		<form method = 'post' action = ''>
		<div class="form-group forms">
			<input type = 'email' name = 'email' placeholder = 'email' class="form-control" id="form" required>
			<br>
			<input type = 'password' name = 'password' placeholder = 'password' class="form-control"  id="form" required>
			<br>
			<input type = 'submit' name = 'login' value = 'Login' id="log">
			
		</div>
		</form>	
	</div>
	
	<div class="col-md-6">
		<h3 id="login">Register</h3>
		<p id="r">Register an Account</p>
		<hr id="hr">
		<p id="registered">In creating an Account, the user has the priviledge to view the products. <br> In order to buy a product the user must be registered</p>
	
		<form method = 'post' action = ''>
		<div class="form-group  forms">
		<input type = 'submit' name='register' href="register.php" value = 'Register' id="log">
		</div>
		</form>	
	</div>
	</div>
	</body>
</html>

	<?php
	if(isset($_POST['register'])){
		header('location:register.php');
	}
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		if(empty($email) || empty($password)){
			echo "Please fill up all fields.";
		}

		else{
			$result = $conn2->query("SELECT * FROM reg WHERE email= '". $email ."' AND password = '$password'");

			if($result){
                if((preg_match('/\./', $email)) == 0){
                    echo "<p id='errors'>Invalid Email Address</p>";
                }
                else if($result->num_rows == 0){
                    echo "<p id='errors'>Invalid Email or Password</p>";
                }
                else{
			$row = $result->fetch_assoc();
			if($row['Status']==2){
				echo "2";
				session_start();
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['logged_in'] = 1;
				$_SESSION['status'] = 2;
				header("location: admin/admin.php");
              }
	                else if($row['Status']==1){
							echo "1";
	                        session_start();
							$_SESSION['user_id'] = $row['user_id'];
							$_SESSION['logged_in'] = 1;
	                        $_SESSION['status'] = 1;
       		                header("location: home.php");
                    	}
	                else if($row['Status']==0){
        	                echo "Account not activated";
                	}
	                else{
                            echo "User does not exist";
                    	}
		}
		}else{
				echo "User does not exist";
			}
		}
	}
	
?>
