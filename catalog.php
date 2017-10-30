<?php
include('heading.php');
include('connect/conn.php');
$query=mysqli_query($conn,"Select * FROM products WHERE prod_id='".$_GET['id']."'");
	while($row = mysqli_fetch_assoc($query)){?>
		
	<img src="<?php echo $row['location'];?>" class="col-xs-4">
	<p class="brand"><?php echo $row['brand'];?></p>
	<p class="desc"><?php echo $row['description'];?></p>
	<p class="price"><?php echo $row['price'];?></p>
	<p class="price">Item Number:<?php echo $row['prod_id'];?></p>
	<p class="price">Quantity:<?php echo $row['quantity'];?></p>
	
	<input type="submit" name="wish" value="Wish">
	<input type="submit" name="cart" value="Add to Cart">
	
<?php	
}
?>