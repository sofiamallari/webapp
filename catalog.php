<?php
session_start();
include('heading.php');
include('connect/conn.php');
$sql=mysqli_query($conn,"Select * FROM reg WHERE user_id = '".$_SESSION['user_id']."'");
$query=mysqli_query($conn,"Select * FROM products WHERE prod_id='".$_GET['id']."'");
	
	
	while($row = mysqli_fetch_assoc($query)){?>	
	<img src="<?php echo $row['location'];?>" class="col-xs-4">
	<p class="brand"><?php echo $row['brand'];?></p>
	<p class="desc"><?php echo $row['description'];?></p>
	<p class="price"><?php echo $row['price'];?></p>
	
	<form method="post" action="catalog.php">
	<input type ='text' name ="prod_id" value="<?php echo $row['prod_id']; ?>">
	<input type="submit" name="wish" value="Wish">
	<input type="submit" name="cart" value="Add to Cart">
	</form>
	
<?php	
}
if(isset($_POST['wish'])){
	$b=$_POST['prod_id'];
	$c=$_SESSION['user_id'];
	$sql="Insert into wish(user_id,prod_id)
			VALUES('$c','$b')";
	mysqli_query($conn,$sql);
	echo $conn->error;	
	header("location:../connect/index.php");
}
if(isset($_POST['cart'])){
	$b=$_POST['prod_id'];
	$c=$_SESSION['user_id'];
	$sql="Insert into orders(user_id,prod_id)
			VALUES('$c','$b')";
	mysqli_query($conn,$sql);
	echo $conn->error;	
	header("location:../register/cart.php");
}
?> 