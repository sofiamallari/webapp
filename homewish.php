<?php
    if(empty($_SESSION['user_id'])){
		header('location: login.php');
	}
    include 'connect/conn.php';

    // user procedural connection
    $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
    $row = mysqli_fetch_assoc($result);
?>
	<body>
        <h2 class="wishes" style="margin-bottom:50px; margin-left:100px;">Wishlist</h2>
		<div class="col-md-10 col-md-offset-1">
            <!-- TABLE FOR WISHLIST -->
            <div class="col-md-12">
                <table class="table" style="margin-bottom:20px;">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Price</th>
			                <th>Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM products JOIN wish ".
	                            "where wish.prod_id = products.prod_id and ".
                                "wish.user_id = '".$_SESSION['user_id']."'";
                            $result = mysqli_query($conn, $query);
								while($row =(mysqli_fetch_assoc($result))) {
								if($row['status']==1){
                                echo "<tr>";
                                    echo "<td class='pads'><img src=".$row['location']." class='col-xs-12'></td>";
 								    echo "<td class='pads'>".$row['description']."</td>";
                                    echo "<td class='pads'>$".$row['price']."</td>";
								    echo "<input type='hidden' value='".$row['prod_id']."' name='prod_id'>";
				                    echo "<td><form method='post' action='homewish.php'><button type='submit' name='del_item' value=' ".$row['prod_id']."'> DEL</button></td>";
							    echo "</tr>";
								}					
							}
                        ?>
                    </tbody>
                </table>
				<div class="form-group" id="pay-now" >
                     <button type="submit" class="btn btn-default" id="confirm-purchase" name="checkout" 
													style="margin-left:550px;
															width:200px;
															height:50px;
															background:#000000;
															color:#FFFFFF;
															border:0px;
															border-bottom:0px;
															font-family: 'Playfair Display', serif;
															font-size:25px;">
															Add to Cart</button>
                 </div>
				 </form>
            </div>
        </div>
	</body>
</html>

<?php
	if(isset($_POST['del_item'])){
	$a=$_POST['del_item'];
	mysqli_query($conn,"delete from wish where prod_id = '$a'");
	}
	
	if(isset($_POST['checkout'])){
		$b=$_POST['prod_id'];
		$c=$_SESSION['user_id'];
	
	$query = "SELECT * FROM orders WHERE user_id = ". $c ." AND prod_id = ".$b;
	$res = mysqli_fetch_assoc(mysqli_query( $conn , $query));
	echo $conn->error;
	if($res){

			$sql = "UPDATE orders SET quantity = quantity + 1 WHERE user_id = ".$c ." AND prod_id = ".$b;

			mysqli_query($conn,$sql);
	}else{
			$sql="Insert into orders(user_id,prod_id,quantity)
			VALUES('$c','$b',1)";
			mysqli_query($conn,$sql);
			echo $conn->error;
			header("location: index.php");
	}
}
?>
