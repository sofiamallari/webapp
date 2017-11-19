<?php
include('heading.php');
include('connect/conn.php');
//error_reporting(0);
$sql=mysqli_query($conn,"Select * FROM reg WHERE user_id = '".$_SESSION['user_id']."'");
$query=mysqli_query($conn,"Select * FROM products WHERE prod_id='".$_GET['id']."'");


	echo "<div class='catalogs'>";
	while($row = mysqli_fetch_assoc($query)){?>	
	<p id="p"><?php echo ucfirst($row['brand'])?></p>
	<hr id="hrr">
	<img src="<?php echo $row['location'];?>" class="col-xs-4" style="margin-left:100px;">
	<p class="catbrand"><?php echo $row['brand'];?></p>
	<p class="catdesc"><?php echo $row['description'];?></p>
	<p class="catprice"><?php echo "$".$row['price'];?></p>
	<p class="off">(50% Off)</p>
	
	<form method="post" action="catalog.php">
	<input type ='hidden' name ="prod_id" value="<?php echo $row['prod_id']; ?>">
	<input type="submit" name="cart" value="Add to Cart" class="car">
	<input type="submit" name="wish" value="Add to Wishlist" class="wis">
	</form>
	
<?php	
}
echo "</div>";

if(isset($_POST['wish'])){
	$b=$_POST['prod_id'];
	$c=$_SESSION['user_id'];
	
	$sql="Insert into wish(user_id,prod_id)
			VALUES('$c','$b')";
	mysqli_query($conn,$sql);

	header("location:../wish.php");
}
if(isset($_POST['cart'])){
	$b=$_POST['prod_id'];
	$c=$_SESSION['user_id'];

	$query = "SELECT quantity FROM orders WHERE user_id = ". $c ." and prod_id = ".$b;

	$a = mysqli_query( $conn , $query);
	$res=mysqli_fetch_assoc($a);
	echo $b;
	if($res){

			$sql = "UPDATE orders SET quantity = quantity + 1 WHERE user_id = ".$c ." AND prod_id = ".$b;

			mysqli_query($conn,$sql);
			header("location: ../cart.php");
			echo "this".$conn->error;
	}else{
	$sql="Insert into orders(user_id,prod_id,quantity)
			VALUES('$c','$b',1)";
	mysqli_query($conn,$sql);
	echo "nope".$conn->error;
	header("location: ../cart.php");
}
}
?>