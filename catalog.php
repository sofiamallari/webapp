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
	<p class="price">Item Number:<?php echo $row['prod_id'];?></p>
	<p class="price">Quantity:<?php echo $row['quantity'];?></p>
	<form method="post" action="catalog.php">
	<input type = 'hidden' name ="prod" value="<?php echo $_GET['id']; ?>">
	<input type="submit" name="wish" value="Wish">
	<input type="submit" name="cart" value="Add to Cart">
	</form>
<?php	
}
$b=$_POST['prod'];
$c=$_SESSION['user_id'];
if(isset($_POST['wish'])){
	$sql="Insert into wish(user_id,prod_id)
			VALUES('$c','$b')";
	mysqli_query($conn,$sql);				  
	echo $conn->error;
	
}
?>