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
        <h2 class="wishes">Wishlist</h2>
		<div class="col-md-10 col-md-offset-1">
            <!-- TABLE FOR WISHLIST -->
            <div class="col-md-12">
                <table class="table table-bordered">
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
                                echo "<tr>";?>
                                    <td class="pads"><img src="<?php echo $row['location'];?>" class="col-xs-4"></td>
                                   <?php
 								    echo "<td class='pads'>".$row['description']."</td>";
                                    echo "<td class='pads'>$".$row['price']."</td>";?>
				                    <?php
				                    echo "<td>". "<form method = 'post' action ='wish.php'><button type='submit' name='del_item' value=' ".$row['prod_id']."'> DEL</button></form></td>";
									# IMPLEMENT SPRINT 4
				                    //echo "<form method = 'post' action ='wish.php'><button type='submit' name='add' value=' ".$row['qu']."'> DEL</button></form></td>";
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
