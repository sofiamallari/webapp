<html>
<head>
			<link href="css/reg.css" type="text/css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 
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
<?php
	include("heading.php");
	if(empty($_SESSION['user_id']))
		header("location: login.php");
	else{
		include ('connect/conn.php');
		$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
		$row = mysqli_fetch_assoc($result);
}
?>
<div class = "col-sm-9 col-md-offset-2">
					<div class = "panel ">

						<div class = "panel-heading" style="font-family: 'Playfair Display', serif;
															font-size:25px; margin-left:300px; margin-top:50px;">
							<h3> Billing Information </h3>
						</div>

						<div class = "panel-body">

							<form class = 'form-horizontal' method = 'post' action = 'editDetails.php'>

								<div class = "form-group">
									<label class = "control-label col-sm-2" id="contact"> Contact Information: </label>
									<div class = "col-sm-10">
										<input type = "text" id="form" class = "form-control" name = "contact" minlength = "11" value = '<?php echo $row['contact'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2" id="contact"> Street: </label>
									<div class = "col-sm-10">
										<input type = "text" id="form" class = "form-control" name = "street" value = '<?php echo $row['street'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2" id="contact"> Barangay: </label>
									<div class = "col-sm-10">
										<input type = "text" id="form" class = "form-control" name = "barangay" value = '<?php echo $row['barangay'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2" id="contact"> City: </label>
									<div class = "col-sm-10">
										<input type = "text" id="form" class = "form-control" name = "city" value = '<?php echo $row['city'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2" id="contact"> Zip: </label>
									<div class = "col-sm-10">
										<input type = "text" id="form" class = "form-control" name = "zip" minlength = "4" value = '<?php echo $row['zip'] ?>'> <br>
									</div>
								</div>

								<div class = "form-group">
									<label class = "control-label col-sm-2" id="contact"> Landmark: </label>
									<div class = "col-sm-10">
										<input type = "text" id="form" class = "form-control" name = "landmark" value = '<?php echo $row['landmark'] ?>'> <br>
									</div>
								</div>

								<div class = "col-sm-2">
									<button type = "submit" class = "btn btn-primary" name = 'submit' style="margin-left:250px;
															width:200px;
															height:50px;
															background:#000000;
															color:#FFFFFF;
															border:0px;
															border-bottom:0px;
															font-family: 'Playfair Display', serif;
															font-size:25px;"> Update </button>
								</div>
								
								<div class = "col-sm-2">
									<button type = "submit" class = "btn btn-primary" name = 'back' style="margin-left:300px;
															width:200px;
															height:50px;
															background:#000000;
															color:#FFFFFF;
															border:0px;
															border-bottom:0px;
															font-family: 'Playfair Display', serif;
															font-size:25px;"> Back</button>
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

			if(isset($_POST['back'])){
				header('location:home.php');
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
					header("location:home.php");
				}
			}
?>	