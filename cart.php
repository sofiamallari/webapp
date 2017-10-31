<html>
<head>
    <meta charset="utf-8">
    <title> Alpha Watches Customer </title>
</head>
<?php
	session_start();
	include("heading.php");
    if(empty($_SESSION['user_id'])){
		header('location: login.php');
	}
    include ('../connect/conn.php');
?>
	<body>
		<div class="col-md-10 col-md-offset-1">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Description</th>
                            <th>Price</th>
			                <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM products JOIN orders ".
	                            "where orders.prod_id = products.prod_id and ".
                                "orders.user_id = '".$_SESSION['user_id']."'";
                            $result = mysqli_query($conn, $query);

                            while($row =(mysqli_fetch_assoc($result))) {
                                echo "<tr>";
                                    echo "<td>".$row['description']."</td>";
                                    echo "<td>".$row['price']."</td>";
                                    echo "<td>".$row['quantity']."</td>";

				                        #TODO("Add glyph icon?");
				                    echo "<td>". "<form method = 'post' action = ''><input type='hidden' name='desc' value='".$row['description']."'>".
                                        "<input type='hidden' value='". $row['quantity'] ."'>".
                                        "<button type='submit' name='del_item' value=' ". $row['prod_id']. "'> DEL</button></form></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="js/notify.min.js">
            <!-- DO NOT REMOVE ME -VLAD -->
        </script>
	</body>
</html>

<?php
	if(isset($_POST['del_item'])){
			$item_id = $_POST['del_item'];

			$query = "DELETE FROM ORDERS WHERE user_id = ". $_SESSION['user_id'] . " and prod_id = ".$item_id;

			if(mysqli_query($conn , $query)){
                echo "<script>".
                    "$.notify('Item ".$_POST['desc']." is removed from your cart)";
                    "</script>";
            }else{
				throw new Error("DATABASE NOT WORKING PROPERLY");
            }
	}

?>
