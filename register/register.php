<?php
		if(isset($_POST['register'])){
		$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL)); 
		$password =md5($_REQUEST['password']);
		$fname =trim(filter_input(INPUT_POST,"fname",FILTER_SANITIZE_SPECIAL_CHARS));
		$lname =trim(filter_input(INPUT_POST,"lname",FILTER_SANITIZE_SPECIAL_CHARS));
		$mname =trim(filter_input(INPUT_POST,"mname",FILTER_SANITIZE_SPECIAL_CHARS));
		$gender=trim(filter_input(INPUT_POST,"gender",FILTER_SANITIZE_SPECIAL_CHARS));
		$Status = $_POST['Status'];
		
		$noError = True;
		include '../connect/conn.php';
	
		$q="SELECT * from reg WHERE email= '".$email."'";
		$result=mysqli_query($conn,$q);
		if(mysqli_num_rows($result)>=1){	
			echo "record already exists<br>";
			$noError = false;
		}
		
		if((preg_match("/^[a-zA-Z ]+$/",$fname))==0){
				echo "Only letters and white space allowed for Firstname<br>";
				$noError = false;
		}else if((preg_match("/^[a-zA-Z ]+$/",$lname))==0){
				echo "Only letters and white space allowed for Lastname<br>";
				$noError = false;
		}else if((preg_match("/^[a-zA-Z ]+$/",$mname))==0){
				echo "Only letters and white space allowed for Middlename<br>";
				$noError = false;
		}else if((preg_match('/\./', $email)) == 0){
			echo "Invalid Email Address<br>";
		}
		
		if($noError == True){
		$query = "INSERT INTO reg(email, password, fname, lname, mname, gender, Status)
							VALUES('$email', '$password', '$fname', '$lname', '$mname', '$gender','$Status')";
		// procedural
		$result = mysqli_query($conn, $query);
		
		$sql="SELECT * FROM reg";
		$r = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($r) == 0) {
		echo "No rows found";
		exit;
		}

		while ($row = mysqli_fetch_assoc($r)) {
			$Status=$row["Status"];
		}
		if($email!=" "){
			session_start();
			setcookie("email",$email,false);
			$_SESSION['Status']=0;
			header("location: ../register/unactivated.php");
		}
		else{
			echo "Regisration unsuccessful. <a href = ../register/register.php'>Click here to register again</a>";
		}

	}
	}
?>