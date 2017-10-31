<html>
<head>
    <meta charset="utf-8">
    <title> Alpha Watches Customer </title>
</head>
<?php
	session_start();
	include("../register/heading.php");
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
                                    echo "<td>".$row['quantity']."</td>";
                                    echo "<td>".$row['description']."</td>";
                                    echo "<td>".$row['price']."</td>";?>
				                    <td><input type="text" value="<?php echo $row['quantity']?>" ></td>                   
									<?php 
				                    #TODO("Add glyph icon?");
				                    echo "<td>". "<form method = 'post' action = ''><button type='submit' name='del_item' value=' ". $row['prod_id'] .
                                        "'> DEL</button></form>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
	</body>
</html>

<?php
	if(isset($_POST['del_item'])){
			
	}

?>
