<html>
<head>
			<link href="reg.css" type="text/css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 
</head>
<?php
	ob_start(); 
	include("../final/heading.php");
	session_start();

	if(empty($_SESSION['user_id']))
		header("location: ../register/login.php");
	else{
		include '../connect/conn.php';

		// user procedural connection
		$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
		$row = mysqli_fetch_assoc($result);
		echo "<div style = 'float: right'><a href = '../register/logout.php'>Logout</a></div>";
		echo "<h1>Account Details</h1>";
	}
?>	
			<center>
			<h1>Billing Information</h1>
			<form method = 'post' action = 'home.php'>
				<input type = 'text' name = 'user_id' value="<?php echo $row['user_id']?>">
				<br>
				<input type = 'text' name = 'fname' value="<?php echo $row['fname']?>" required>
				<br>
				<input type = 'text' name = 'lname' value="<?php echo $row['lname']?>" required>
				<br>
				<input type = 'text' name = 'mname' value="<?php echo $row['mname']?>" required>
				<br>
				<input type = 'text' name = 'contact' placeholder = 'Contact Number' required>
				<br>
				<input type="text" name="street" placeholder="Street Address"> 
				<br>
				<input type="text" name="barangay" placeholder="Barangay"> 
				<br>
				<input type="text" name="city" placeholder="City"> 
				<br>
				<input type="text" name="zip" placeholder="Zip code"> 
				<br>
				<input type="text" name="landmark" placeholder="Landmark"> 
				<br>
				<input type = 'submit' name = 'register' value= 'Register'>
				<input type='hidden' name="Status" value="0">
			</form>
		</center>
	<?php
ob_start();
include('../connect/conn.php');
if(isset($_POST['register'])){
				$idd=$_POST['user_id'];
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$mname=$_POST['mname'];
				$contact=$_POST['contact'];
				$street=$_POST['street'];
				$barangay=$_POST['barangay'];
				$city=$_POST['city'];
				$zip=$_POST['zip'];
				$landmark=$_POST['landmark'];
				$r="UPDATE reg set 
						`fname`='".$fname."',
						`lname`='".$lname."',
						`mname`='".$mname."',
						`contact`='".$contact."',
						`street`='".$street."',
						`barangay`='".$barangay."',
						`city`='".$city."',
						`zip`='".$zip."',
						`landmark`='".$landmark."'
						WHERE `user_id`='".$idd."'
						";
	if((!(ctype_alnum($street))) && (!(ctype_alnum($barangay)))){
		echo "Only letters and numbers are allowed for street and barangay<br>";
	}
	if((!(ctype_digit($contact))) && (!(ctype_digit($zip)))){
		echo "Only numbers are allowed for zip and contact<br>";
	}
	if((!(ctype_alpha($city))) && (!(ctype_alpha($landmark)))){
		echo "Only letters are allowed for city and landmark<br>";
	}
	if(strlen($contact) != 11){
		echo "Contact must have 11 digits<br>";
	}
	else{
	mysqli_query($conn,$r);
	echo $conn->error;
	}
}
//header("location:../register/billing.php");
?>

</html>