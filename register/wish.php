<html>
<head>
    <meta charset="utf-8">
    <title> Alpha Watches Customer </title>
</head>
<?php
	session_start();
    ob_start();

    if(empty($_SESSION['user_id'])){
		header('location: login.php');
	}
    include("../register/heading.php");

    include '../connect/conn.php';

    // user procedural connection
    $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = $_SESSION[user_id]");
    $row = mysqli_fetch_assoc($result);
?>


	<body>
		<div class="col-md-10 col-md-offset-1">
            <div class="col-md-offset-1">
                <h2>Hi <?php echo $row['fname']; echo " ".$row['fname'] ?> </h2>
            </div>

            <!-- TABLE FOR WISHLIST -->
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Product Page</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT BRAND,NAME,PRICE,LINK from wishlist".
                                    "JOIN products where wishlist.product_id = products.product.id";

                            $result = mysqli_query($conn, $query);
                            while($row =(mysqli_fetch_assoc($result))) {
                                echo "<tr>";
                                    echo "<td>".$row['brand']."</td>";
                                    echo "<td>".$row['name']."</td>";
                                    echo "<td>".$row['price']."<td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
	</body>
</html>
