<?php
include('heading.php');
include('connect/conn.php');
if($_SESSION['user_id']==null){
	header("location:login.php");
}else{
$sql=mysqli_query($conn,"SELECT * FROM reg WHERE user_id= '".$_SESSION['user_id']."'");
$query=mysqli_query($conn,"SELECT * FROM products WHERE brand= '".$_GET['id']."' ");

?>
		<div style="width:100% height:200px;">
		<image src="images\luxury.jpg" style="width:1230px; margin-left:60px; margin-top:30px; margin-bottom:50px;">
		</div>
		 <div class="container col-xs-12">
		 <hr style="height:2px; width:93%; background:#C3CBD5; margin-left:50px; margin-right:50px; margin-bottom:10px;"> 
		 <form name="myform" style="margin-left:50px; font-family:'Playfair Display', serif; -webkit-appearance: none; ">
		   <?php $row=mysqli_fetch_assoc($query);?>
		   <label style="font-family: 'Pinyon Script', cursive; margin-left:550px; font-size:40px;"><?php echo ucfirst($row['brand'])?></label>
		   <label class="cc" id="colors"> Color:</label>
           <select class="cc" name="Color" onchange="submitForm();">
			 <option/>
             <option value="gold">Gold
             <option value="rose">Rose
             <option value="white">White
             <option value="black">Black
             <option value="silver">Silver
             <option value="brown">Brown
           </select>
         </form>
		 <script type="text/javascript">
			function submitform()
			{
			  document.myform.submit();
			}
         </script>
		  <hr style="height:2px; width:93%; background:#C3CBD5; margin-left:50px; margin-right:50px; margin-top:10px;"> 
		</div>
		
	   <?php
       echo "<div class='panel-table-container col-lg-12' style='margin-left:50px; margin-right:100px;'>
			<table class='panel-table col-lg-12'>
            <tr>";
				
				$query=mysqli_query($conn,"SELECT * FROM products WHERE brand= '".$_GET['id']."' ");
				if (mysqli_num_rows($query) == 0) {
						echo "No products found";
						exit;
				}
				else{
					$i=0;
					echo "<tr>";
					while($row = (mysqli_fetch_assoc($query))){
						if($row['status'] == 1){
							if($i%3 == 0){
								echo "</tr><td class='prod'>";?>
								<a href="../catalog.php?id=<?php echo $row['prod_id']?>">
								<?php
								echo "<img src='".$row['location']."' class='images'></a><br>";
								echo "<footer class='panel-footer'><span class='brand'>".$row['brand'].".</span>";
								echo "<span class='desc'>".$row['description']."</span>";
								echo "<p class='price'>$".$row['price']." <span class='off'>50%off</span></p></footer></td>";			
							}else{
									echo "<td class='prod'>";?>
									<a href="../catalog.php?id=<?php echo $row['prod_id']?>">
									<?php
									echo "<img src='".$row['location']."' class='images'></a><br>";	
									echo "<footer class='panel-footer'><span class='brand'>".$row['brand'].".</span>";
									echo "<span class='desc'>".$row['description']."</span>";
									echo "<p class='price'>$".$row['price']." <span class='off'> 50%off</span></p></footer></td>";	
								
							}
							$i++;	
						}
					}
				};
		}
				?>
		   </tr>
		</table>
	</div>
</html>