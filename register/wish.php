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
    

    include '../connect/conn.php';

    // user procedural connection
    $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
    $row = mysqli_fetch_assoc($result);
?>
	<body>
		<div class="col-md-10 col-md-offset-1">
            <div class="col-md-offset-1">
                <h2>Hi <?php echo $row['fname'] ?> </h2>
            </div>
            <!-- TABLE FOR WISHLIST -->
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Gender</th>
                            <th>Price</th>
			                <th>Product Page</th>
			                <th>Remove Item </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM products JOIN wish ".
	                            "where wish.prod_id = products.prod_id and ".
                                "wish.user_id = '".$_SESSION['user_id']."'";
                            $result = mysqli_query($conn, $query);

                            while($row =(mysqli_fetch_assoc($result))) {
                                echo "<tr>";
                                    echo "<td>".$row['brand']."</td>";
                                    echo "<td>".$row['description']."</td>";
                                    echo "<td>".$row['gender']."</td>";
				                    echo "<td>".$row['price']."</td>";
				                    echo "<td>".$row['location']."</td>";
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
	$a=$_POST['del_item'];
	mysqli_query($conn,"delete from wish where prod_id = '$a'");
				
	}

?>
