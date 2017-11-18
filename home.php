<html>
<?php
	include("heading.php");
	if(empty($_SESSION['user_id']))
		header("location: login.php");
	else{
		include ('connect/conn.php');

		// user procedural connection
		$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
		$row = mysqli_fetch_assoc($result);
	}
?>	
	<body>
	
		<div class = "container col-md-12">
			<p style="font-family: 'Playfair Display', serif; font-size:40px; margin-left:50px; margin-top:50px; width:300px;">Account Details</p>
			<div class = "row">
				<div class = "panel-heading">
				<nav class="nav-sidebar" style="margin-left:50px;">
					<ul class="nav tabs col-md-2" style="font-size:30px; color:#000000; text-decoration:none;">
					  <li class="active"><a href="#tab1" data-toggle="tab" style="font-size:30px; color:#000000; text-decoration:none;">Wish</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab" style="font-size:30px; color:#000000; text-decoration:none;">Cart</a></li>
					  <li class=""><a href="#tab3" data-toggle="tab" style="font-size:30px; color:#000000; text-decoration:none;">Account</a></li>                               
					  <li class=""><a href="#tab4" data-toggle="tab" style="font-size:30px; color:#000000; text-decoration:none;">Billing</a></li>                               
					</ul>
				</nav>
				
				<div class="tab-content col-md-8" style="margin-bottom:10px;">
				<div class="tab-pane active text-style" id="tab1" style="margin:0px; padding:0px 0px 0px;">
					   <?php include('homewish.php');?>
				</div>
				
				<div class="tab-pane text-style" id="tab2">
					   <?php include('homecart.php');?>
				</div>
				
				
				<div class="tab-pane text-style" id="tab3">	
				<div class = "col-sm-6" style="margin-left:200px;">
					<div class = "panel">
						<div class = "panel-heading">
							<h3 style="	font-family: 'Playfair Display', serif; font-size:30px;"> Account Information</h3>
						</div>
						<?php
						$result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
						$row = mysqli_fetch_assoc($result);?>
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
									</tr>
									<tr>
										<th> Middle Name </th>
										<td> <?php echo $row['mname'] ?> </td>
									</tr>
									<tr>
										<th> Surname </th>
										<td> <?php echo $row['lname'] ?> </td>
									</tr>
									<tr>
										<th> Gender </th>
										<td> <?php echo $row['gender'] == 'male' ? 'Male' : "Female"; ?> </td>
									</tr>
								</tbody>
							</table>
							<a href="editDetails.php">
							<button type = "submit" class = "btn btn-primary" name = 'wist' style="margin-left:500px;
															width:200px;
															height:50px;
															background:#000000;
															color:#FFFFFF;
															border:0px;
															border-bottom:0px;
															font-family: 'Playfair Display', serif;
															font-size:25px;">Edit Account</button>				
							</a>
						</div>
					</div>
				</div>
			</div>
			
		<div class="tab-pane text-style" id="tab4">		
		<div class = "container">
			<div class = "row">

				<div class = "col-sm-6" style="margin-left:150px;">
					<div class = "panel">
					
						<div class = "panel-heading col-sm-6">
							<h3 style="	font-family: 'Playfair Display', serif; font-size:30px;"> Billing Address</h3>
						</div>
						
						<div class = "panel-body">
							<table class = "table table-borderless" class = "col-sm-12">
								<tbody>
									<tr>
										<th>Contact Number: </th>
										<td><?php echo $row['contact'];?> </td>
									</tr>	
									<tr>
										<th>Street: </th>
										<td><?php echo $row['street'];?> </td>
									</tr>
									<tr>
										<th>Barangay: </th>
										<td> <?php echo $row['barangay'];?></td>
									</tr>	
									<tr>	
										<th>City: </th>
										<td><?php echo $row['city'];?> </td>
									</tr>
									<tr>
										<th>Zip: </th>
										<td><?php echo $row['zip']; ?> </td>
									</tr>
									<tr>
										<th>Landmark: </th>
										<td><?php echo $row['landmark']; ?> </td>
									</tr>
								</tbody>
							</table>
							<a href="editBilling.php">
							<button type = "submit" class = "btn btn-primary" name = 'wist' style="margin-left:550px;
															width:200px;
															height:50px;
															background:#000000;
															color:#FFFFFF;
															border:0px;
															border-bottom:0px;
															font-family: 'Playfair Display', serif;
															font-size:25px;">Edit Address</button>				
							</a>
						</div>
					</div>
					
				</div>
		</div>


</html>