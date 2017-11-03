<?php
include("heading.php");
	if(empty($_SESSION['user_id']))
		header("location: ../register/login.php");
	else{
		include ('../connect/conn.php');

		// user procedural connection
		$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
		$row = mysqli_fetch_assoc($result);
		echo "<h1>Checkout</h1>";
		
		$sql = "SELECT SUM(PRODUCTS.PRICE) FROM ORDERS, PRODUCTS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."' and PRODUCTS.PROD_ID = ORDERS.PROD_ID";
		$result = mysqli_query($conn,$sql);
	}
?>
<div class = "container">
			<div class = "row">

				<div class = "col-sm-12">
					<div class = "panel">
					
						<div class = "panel-heading col-sm-6">
							<h3> Checkout Information</h3>
						</div>
						
						<div class = "panel-body">
							<table class = "table table-borderless" class = "col-sm-6">
								<tbody>
									<tr>
										<th>Total Bill:</th>
										<?php while ($rew =  mysqli_fetch_assoc($result)){
											echo "<td>".$rew['SUM(PRODUCTS.PRICE)']."</td>";

										}?>
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

							<form class = 'form-horizontal' method = 'post' action = 'checkout.php'>

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
									<button type = "submit" class = "btn btn-primary" name = 'update'> Update </button>
								</div>
								
								<div class = "col-sm-2">
									<button type = "submit" class = "btn btn-primary" name = 'continue'> Continue </button>
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
		if(isset($_POST['update'])){

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
			if(isset($_POST['continue'])){
				header("location: register/payment.php");
			}
		
		?>
		