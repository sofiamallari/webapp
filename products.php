<?php
include('heading.php');
include('connect/conn.php');
?>
		 <div class="container col-xs-12">
         <p id="nav2"><?php echo "Results"?></p>
         <form>
           <label class="cc"> Price Range:</label>
           <select class="cc">
             <option/>
             <option/>50,000-30,000
             <option/>30,000-20,000
             <option/>20,000-10,000
             <option/>10,000-1,000
           </select>
         </form>
         <hr class="hr-page">
       </div>
	   
       <div class="panel-table-container col-lg-12">
         <table class="panel-table col-lg-12">
           <tr>
				<?php
				$query=mysqli_query($conn,"SELECT * FROM products WHERE brand= '".$_GET['id']."'");
				if (mysqli_num_rows($query) == 0) {
						echo "No products found";
						exit;
				}
				else{
					$i=0;
					echo "<tr>";
					while($row = (mysqli_fetch_assoc($query))){
						if($i%3 == 0){
							echo "</tr><td>";?>
							<a href="../catalog.php?id=<?php echo $row['prod_id']?>">
							<?php
							echo "<img src='".$row['location']."' class='images'></a><br>";
							echo "<footer class='panel-footer'><p class='brand'>".$row['brand']."</p>";
							echo "<p class='desc'>".$row['description']."</p>";
							echo "<p class='price'>".$row['price']."</p></footer></td>";								
						}else{
							echo "<td>";?>
							<a href="../catalog.php?id=<?php echo $row['prod_id']?>">
							<?php
							echo "<img src='".$row['location']."' class='images'></a><br>";	
							echo "<footer class='panel-footer'><p class='brand'>".$row['brand']."</p>";
							echo "<p class='desc'>".$row['description']."</p>";
							echo "<p class='price'>".$row['price']."</p></footer></td>";	
						}
						$i++;	
					}
				};
				?>
		   </tr>
		</table>
	</div>
</html>