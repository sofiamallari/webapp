<?php
include('heading.php');
include('../connect/conn.php');
$query=mysqli_query($conn,"SELECT * FROM reg WHERE user_id= '".$_GET['idd']."'");
$q="SELECT * FROM reg";
$row=mysqli_fetch_assoc($query);
?>
<head>
<link href="../register/reg.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 	
</head>
<h1 style="	font-size:30px;
	font-family: 'Playfair Display', serif; margin:110px 50px 50px 50px; ">Update Records</h1>
<form method="POST" action="update.php" style="margin-left:40px;">
<div class="form-group col-md-4 forms">
	<input type = 'text' name = 'user_id' value="<?php echo $row['user_id']?>" class="form-control" hidden>
	<br>
	<input type = 'email' name = 'email' placeholder ="email" class="form-control" required>
	<br>
	<input type = 'password' name = 'pass' placeholder = 'password' class="form-control" required>
	<br>
	<input type = 'text' name = 'fname' placeholder = 'Given name' class="form-control" required>
	<br>
	<input type = 'text' name = 'lname' placeholder = 'Surname' class="form-control" required>
	<br>
	<input type = 'text' name = 'mname' placeholder = 'Middle name' class="form-control" required>
	<br>
	<input type="radio" name="gender" value="male" checked> Male &nbsp;
	<input type="radio" name="gender" value="female"> Female<br>
	<br>
	<input type = 'hidden' name = 'Status' label="status" value='0'>
	<br>
	<input type="submit" name="Update" value="Update" style="background:#998100; padding:0px; border-bottom:0px; width:70px; height:30px; color:#FFFFFF; border:0px; font-family: 'Playfair Display', serif;">
	<a href="admin.php"><Button style="background:#000000; padding:0px; border-bottom:0px; width:70px; height:30px; color:#FFFFFF; border:0px; font-family: 'Playfair Display', serif;"> Back <button></a>
</div>
</form>
