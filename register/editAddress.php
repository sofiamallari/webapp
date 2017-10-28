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
				include '../connect/conn.php';

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
							<h3> Address Information </h3>
						</div>
						
						<div class = "panel-body">
							<table class = "table table-borderless" class = "col-sm-6">
								<tbody>
									<tr>
										<th> Billing Address </th>
											<td> <?php echo $row['street']. " " . $row['barangay'] ."<br>" . $row['zip'] ?> </td>
										<th> Shipping Address </th>
									</tr>
									<tr>
										<td> </td>
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

							<form class = 'form-horizontal' method = 'post' action = 'editAddress.php'>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Contact Information: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "contact" minlength = "11" placeholder = '<?php echo $row['contact'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Street: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "street" placeholder = '<?php echo $row['street'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Barangay: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "barangay" placeholder = '<?php echo $row['barangay'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> City: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "city" placeholder = '<?php echo $row['city'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Zip: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "zip" minlength = "4" placeholder = '<?php echo $row['zip'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2"> Landmark: </label>
									<div class = "col-sm-10">
										<input type = "text" class = "form-control" name = "landmark" placeholder = '<?php echo $row['landmark'] ?>'> <br>
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
			}
		?>
	</body>
	
</html>