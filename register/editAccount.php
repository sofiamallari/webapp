<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="reg.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet">

		<?php
			ob_start();
			include("../heading.php");

			if(empty($_SESSION['user_id'])){
				header("location: ../register/login.php");
			}
			else{
				include ('../connect/conn.php');

			// user procedural connection
			$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
			$row = mysqli_fetch_assoc($result);
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
										<th> Account Number </th>
										<td> <?php echo $row['user_id']?> </td>
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

						<div class = "panel-body">

							<form class = 'form-horizontal' method = 'post' action = 'editAccount.php'>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> First Name: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "fname" placeholder = '<?php echo $row['fname'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Middle Name:  </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "mname" placeholder = '<?php echo $row['mname'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Surname:  </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "lname" placeholder = '<?php echo $row['lname'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Email: </label>
									<div class = "col-sm-10">
										<input type = "email" class = "form-control" name = "email" placeholder = '<?php echo $row['email'] ?>'> <br>
									</div>
								</div>

								<div class = "col-sm-2">
									<button type = "submit" class = "btn btn-primary" name = 'register'> Modify </button>
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
			ob_start();
			include('../connect/conn.php');

			if(isset($_POST['register'])){

				unset($fname, $lname, $mname, $contact, $street, $barangay, $city, $zip, $landmark);	

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
			}
		?>
	</body>
	
</html>