<html>
<head>
			<link href="reg.css" type="text/css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 
</head>
<?php
	ob_start(); 
	include("../register/heading.php");
	if(empty($_SESSION['user_id']))
		header("location: ../register/login.php");
	else{
		include '../connect/conn.php';

		// user procedural connection
		$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
		$row = mysqli_fetch_assoc($result);
		echo "<h1>Account Details</h1>";
	}
?>	
			<style>
			.table-borderless > tbody > tr > td,
			.table-borderless > tbody > tr > th,
			.table-borderless > tfoot > tr > td,
			.table-borderless > tfoot > tr > th,
			.table-borderless > thead > tr > td,
			.table-borderless > thead > tr > th {
			    border: none;
			}
		</style>

	</head>

	<body>
	
		<div class = "container">
			<div class = "row">

				<div class = "col-sm-12">
					<div class = "panel">
						<div class = "panel-heading">
							<h3> Account Details </h3>
						</div>

						<div class = "panel-body">
							<table class = "table table-borderless" class = "col-sm-6">
								<tbody>
									<tr>
										<th> Email Address </th>
										<td> <?php echo $row['email'] ?> </td>
									</tr>
									<tr>
										<th> Given Name </th>
										<td> <?php echo $row['fname'] ?> </td>
										<th> Gender </th>
										<td> <?php echo $row['gender'] == 'male' ? 'Male' : "Female"; ?> </td>
									</tr>
									<tr>
										<th> Middle Name </th>
										<td> <?php echo $row['mname'] ?> </td>
									</tr>
									<tr>
										<th> Surname </th>
										<td> <?php echo $row['lname'] ?> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class = "col-sm-12">
					<div class = "panel">

						<div class = "panel-heading">
							<h3> Edit Account Information </h3>
						</div>

						<div class = "panel-body col-sm-8">

							<form class = 'form-horizontal' method = 'post' action = 'home.php'>
								
								<div class = "form-group">
									<label class = "control-label col-sm-2"> First Name: </label>
									<div class = "col-sm-8">
										<input type = "text" class = "form-control" name = "fname" value = '<?php echo $row['fname'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Middle Name:  </label>
									<div class = "col-sm-8">
										<input type = "text" class = "form-control" name = "mname" value = '<?php echo $row['mname'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Surname:  </label>
									<div class = "col-sm-8">
										<input type = "text" class = "form-control" name = "lname" value = '<?php echo $row['lname'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Email: </label>
									<div class = "col-sm-8">
										<input type = "email" class = "form-control" name = "email" value = '<?php echo $row['email'] ?>'> <br>
									</div>
								</div>

								<div class = "col-sm-2">
									<button type = "submit" class = "btn btn-primary" name = 'register'> Modify</button>
								</div>

								<div class = "col-sm-6">
									<input type = "hidden" class = "form-control" name = "Status" value = "0">
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>


		<div class = "container">
			<div class = "row">

				<div class = "col-sm-12">
					<div class = "panel">
					
						<div class = "panel-heading col-sm-6">
							<h3> Billing Address</h3>
						</div>
						
						<div class = "panel-body">
							<table class = "table table-borderless" class = "col-sm-6">
								<tbody>
									<tr>
										<th>Contact Number: </th>
										<td><?php echo $row['contact'];?> </td>
										<th>Street: </th>
										<td><?php echo $row['street'];?> </td>
									</tr>
									<tr>
										<th>Barangay: </th>
										<td> <?php echo $row['barangay'];?></td>
										<th>City: </th>
										<td><?php echo $row['city'];?> </td>
									</tr>
									<tr>
										<th>Zip: </th>
										<td><?php echo $row['zip']; ?> </td>
										<th>Landmark: </th>
										<td><?php echo $row['landmark']; ?> </td>
									</tr>
								</tbody>
							</table>
							
						</div>
						
						
						
						
					</div>
					
				</div>

				<div class = "col-sm-12">
					<div class = "panel">

						<div class = "panel-heading">
							<h3> Billing Information </h3>
						</div>

						<div class = "panel-body">

							<form class = 'form-horizontal' method = 'post' action = 'home.php'>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Contact Information: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "contact" minlength = "11" value = '<?php echo $row['contact'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Street: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "street" value = '<?php echo $row['street'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Barangay: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "barangay" value = '<?php echo $row['barangay'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> City: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "city" value = '<?php echo $row['city'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Zip: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "zip" minlength = "4" value = '<?php echo $row['zip'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Landmark: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "landmark" value = '<?php echo $row['landmark'] ?>'> <br>
									</div>
								</div>

								<div class = "col-sm-2">
									<button type = "submit" class = "btn btn-primary" name = 'submit'> Update </button>
								</div>
						
								<div class = "col-sm-6">
									<input type = "hidden" class = "form-control" name = "Status" value = "0">
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
			if(isset($_POST['register'])){

				//unset($fname, $lname, $mname, $contact, $street, $barangay, $city, $zip, $landmark);	
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$mname = $_POST['mname'];
				$email = $_POST['email'];

				$sql = "UPDATE reg set 
						`fname`='".$fname."',
						`lname`='".$lname."',
						`mname`='".$mname."',
						`email`='".$email."'
						WHERE `user_id`='".$row['user_id']."'
						";
				 
				if((!(ctype_alpha($fname))) && (!(ctype_alpha($lname))) && (!(ctype_alpha($mname))))
					echo "<div class = 'container'> <h3> <font color = 'red'> Only characters are allowed. <br> </div>";
				else{
					mysqli_query($conn,$sql);
					echo $conn->error;
				}
			}
			

			if(isset($_POST['submit'])){

				//unset($fname, $lname, $mname, $contact, $street, $barangay, $city, $zip, $landmark);	

				$contact = $_POST['contact'];
				$street = $_POST['street'];
				$barangay = $_POST['barangay'];
				$city = $_POST['city'];
				$zip = $_POST['zip'];
				$landmark = $_POST['landmark'];

				$sql = "UPDATE reg set 
						`contact`='".$contact."',
						`street`='".$street."',
						`barangay`='".$barangay."',
						`city`='".$city."',
						`zip`='".$zip."',
						`landmark`='".$landmark."'
						WHERE `user_id`='".$row['user_id']."'
						";

				if((!(ctype_alnum($street))) && (!(ctype_alnum($barangay))))
					echo "<div class = 'container'> <h3> <font color = 'red'> Only letters and numbers are allowed for street and barangay<br> </div>";
					echo $row['fname'];
				
				if((!(ctype_digit($contact))) && (!(ctype_digit($zip))))
					echo "<div class = 'container'> <h3> <font color = 'red'> Only numbers are allowed for zip and contact<br> </div>";
				 
				if((!(ctype_alpha($city))) && (!(ctype_alpha($landmark))))
					echo "<div class = 'container'> <h3> <font color = 'red'> Only letters are allowed for city and landmark <br> </div>";
				else{
					mysqli_query($conn,$sql);
					echo $conn->error;
				}
			}
?>

</html>