<html>
	<head>
			<?php 
			include("../final/heading.php");
			?>
			<link href="reg.css" type="text/css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Manuale" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Manuale|Playfair+Display:400i" rel="stylesheet"> 
			
	</head>

	<body>
			
			<h1>Register</h1>
			<h5>Personal Information &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
			&ensp;&ensp;&ensp;Terms and Conditions</h5>
			<hr class="hr">
			<form method = 'post' action = 'register.php'>
				<div class="form-group col-md-4 forms">
					<input type="text" name="fname" class="form-control" placeholder="First name" required>
					<br>
					<input type="text" name="lname" class="form-control" placeholder="Last name" required>
					<br>
					<input type="text" name="mname" class="form-control" placeholder="Middle name" required>
					<br>
					<input type="email" name="email" class="form-control" placeholder="Email Address" required>
					<br>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
					<br>
					  <input type="radio" name="gender" value="male" checked> Male &nbsp;
					  <input type="radio" name="gender" value="female"> Female<br>
					  <br>
					  <input type = 'submit' name = 'register' value = 'Register' class="submit">					  
					  <input type='hidden' name="Status" value="0">
				</div>				
			</form>
		
				<div class="col-md-8 terms">
				<p>
					By clicking on "Register" you agree to The Company's' Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. 
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund 
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. 
				</div>
	</body>
</html>