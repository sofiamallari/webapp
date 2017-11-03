<html>
<head>
    <meta charset="utf-8">
    <title> Alpha Watches Customer </title>
</head>
<?php
	include("../register/heading.php");
    if(empty($_SESSION['user_id'])){
		header('location: login.php');
	}
    include ('../connect/conn.php');

    // user procedural connection
    $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
    $sql = mysqli_query($conn, "SELECT * FROM products WHERE prod_id = prod_id");
    $row = mysqli_fetch_assoc($result);
?>
	<body>
		<form method="post" action="checkout.php">
		<a href="checkout.php"><button type='submit' name='checkout' value=""> checkout</button></a>
		</form>
		<div class="col-md-10 col-md-offset-1">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Price</th>
			                <th>Quantity</th>
			                <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM products JOIN orders ".
	                            "where orders.prod_id = products.prod_id and ".
                                "orders.user_id = '".$_SESSION['user_id']."'";
                            $result = mysqli_query($conn, $query);

                            while($row =(mysqli_fetch_assoc($result))) {
                                echo "<tr>";?>
                                    <td><img src="<?php echo $row['location'];?>" class="col-xs-4"></td>
                                   <?php
 								    echo "<td>".$row['description']."</td>";
                                    echo "<td>".$row['price']."</td>";?>
				                    <td><input type="text" value="<?php echo "1" ?>"></td>
									<?php 
				                    #TODO("Add glyph icon?");
				                    echo "<td>". "<form method = 'post' action ='cart.php'><button type='submit' name='del_item' value=' ".$row['order_id']."'> DEL</button></form>";
							    echo "</tr>";
									   for($i=0; $i>=mysqli_num_rows($result); $i++){
										 $total=0;
										 $total=$total+$row['price'];
										 echo $row['price'];
									   }   
		
                            }
							$sql = "SELECT SUM(PRODUCTS.PRICE) FROM ORDERS, PRODUCTS WHERE ORDERS.USER_ID='".$_SESSION['user_id']."' and PRODUCTS.PROD_ID = ORDERS.PROD_ID";
							$result = mysqli_query($conn,$sql);
							while ($rew =  mysqli_fetch_assoc($result)){
								echo "Total:".$rew['SUM(PRODUCTS.PRICE)'];
							}
                        ?>
						
                    </tbody>
                </table>
				<?php
				if(isset($_POST['del_item'])){
					$a=$_POST['del_item'];
					mysqli_query($conn,"delete from orders where order_id = '$a'");
				}
				?>
            </div>
        </div>
	</body>
</html>

<?php
	

?>
