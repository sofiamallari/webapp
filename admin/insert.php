<?php
include('../connect/conn.php');
if(isset($_POST['Insert'])){
				$idd=$_POST['user_id'];
				$email=$_POST['email'];
				$password=md5($_POST['pass']);
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$mname=$_POST['mname'];
				$gender=$_POST['gender'];
				$Status=$_POST['Status'];					
	
	$query="INSERT INTO reg(user_id, email, password, fname, lname, mname, gender, Status)
							VALUES('$idd','$email', '$password', '$fname', '$lname', '$mname', '$gender','$Status')";
	mysqli_query($conn,$query);
}
header("location:../admin/admin.php");
?>