<?php
include('../connect/conn.php');
if(isset($_POST['Update'])){
				$idd=$_POST['user_id'];
				$email=$_POST['email'];
				$password=md5($_POST['pass']);
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$mname=$_POST['mname'];
				$gender=$_POST['gender'];
				$Status=$_POST['Status'];
				$r="UPDATE reg set 
						`email`='".$email."',
						`password`='".$password."',
						`fname`='".$fname."',
						`lname`='".$lname."',
						`mname`='".$mname."',
						`gender`='".$gender."',
						`Status`='".$Status."'
						WHERE user_id='$idd'
						";
	mysqli_query($conn,$r);
	echo $conn->error;
}
//header("location:../admin/admin.php");
?>
