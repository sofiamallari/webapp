<?php 
session_start();
include('header.php');
?>
		<link href="../css/foot.css" rel="stylesheet">
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
				<?php for($i=0;$i<=5;$i++){
				"<li data-target='/#carousel-example/' '/data-slide-to=/'$i></li>";
				}
				?>
			</ol>


	<div class="carousel-inner ">
    <div class="item active">
				<a href="#"><video autoplay loop muted width="100%"><source src="../images/ap.mp4" type="video/mp4"></video></a>
				<div class="carousel-caption"></div>
	</div>
	<div class="item">
           <a href="#"><video autoplay loop muted width="100%" ><source src="../images/bulgari.mp4" type="video/mp4"></video></a>
			<div class="carousel-caption"></div>
    </div>

	<div class="item">
           <a href="#"><video autoplay loop muted width="100%" ><source src="../images/graff.mp4" type="video/mp4"></video></a>
			<div class="carousel-caption"></div>
    </div>

	<div class="item">
      <a href="#"><video autoplay loop muted width="100%" ><source src="../images/rolex.mp4" type="video/mp4"></video></a>
      <div class="carousel-caption"></div>
    </div>

	<div class="item">
		<a href="#"><video autoplay loop muted width="100%" ><source src="../images/tiffany.mp4" type="video/mp4"></video></a>
		<div class="carousel-caption"> </div>
	</div>

	<div class="item">
      <a href="#"><video autoplay loop muted width="100%" ><source src="../images/tissot.mp4" type="video/mp4"></video></a>
      <div class="carousel-caption"></div>
    </div>

	</div>
	</div>
</div>


  <!-- START of Imagery -->
  
		<div class="panel-table-container col-lg-6 col-md-6 col-md-6"><table class="panel-table">
		
			<tr class="body"><td id="wh">
			
        <img src="../images/MEN.jpg"  height="500px" width="600px"; style="margin-left:35px; margin-right:10px; margin-top:100px;">
        <div class="middle  col-md-7">
          <div class="middle-contain">
            <p class="middle-title">SHOP FOR MEN</p>
            <a href="../products.php?id=alange" class="btn middle-btn"><p class="middle-text">SHOP NOW</p></a>
          </div>
      </td></tr>
			</table>
			
			
		</div>

		 <div class="panel-table-container col-lg-6 col-md-6 col-sm-6">
			<table class="panel-table">
			<tr class="body"><td>
        <img src="../images/WOMEN.jpg" height="500px"; width="600px"; style="margin-left:10px; margin-right:10px;  margin-top:100px;">
        <div class="middle col-xs-4">
          <div class="middle-contain1">
            <p class="middle-title">SHOP FOR WOMEN</p>
            <A href="../products.php?id=omega" class="btn middle-btn1"><p class="middle-text">SHOP NOW</p></a>
          </div></div>
      </td></tr>
			</table>
		</div>
</div>
</div>

<!--
<br><br><br><br><br><br><br><br>
<div class="col-sm-12 col-md-12 col-xs-12 col-md-11 col-lg-11">
	<article id = "article1" class="col-md-9 col-md-offset-2">
			<p id="brand">Brands</p>
		</article>
		<hr class="style18 col-md-11 col-md-offset-1">
	</div>

</div>

<div class="container">
		 <div class="panel-table-container col-lg-2 col-md-2 col-sm-2">
			<table class="panel-table col-md-offset-3">
			<tr class="body"><td><img src="table/h.jpg"></td></tr>
			</table>
		</div>

		 <div class="panel-table-container col-lg-2 col-md-2 col-sm-2">
			<table class="panel-table">
			<tr class="body"><td><img src="table/g.jpg"></td></tr>
			</table>
		</div>

		 <div class="panel-table-container col-lg-2 col-md-2 col-sm-2">
			<table class="panel-table">
			<tr class="body"><td><img src="table/r.jpg"></td></tr>
			</table>
		</div>

		<div class="panel-table-container col-lg-2 col-md-2 col-sm-2">
			<table class="panel-table">
			<tr class="body"><td><img src="table/t.jpg "></td></tr>
			</table>
		</div>

		<div class="panel-table-container col-lg-2 col-md-2 col-sm-2">
			<table class="panel-table">
			<tr class="body"><td><img src="table/v1.jpg "></td></tr>
			</table>
		</div>

		<div class="panel-table-container col-lg-2 col-md-2 col-sm-2">
			<table class="panel-table">
			<tr class="body"><td><img src="table/v2.jpg "></td></tr>
			</table>
		</div>
   </div>-->

<div class="cert col-md-12">

	  <div class="col-md-6">
		<div class="id playfair">Audemars Piguet <br>Oak Collection <br>
		  <a href="../products.php?id=audemars" class="btn a playfair"><p class="a">SEE COLLECTION</p></a>
		</div>
	  </div>
	  <div class="col-md-6">
	  <img src="../images/table/b13.png">
	  </div>
</div>

<div style="margin-top: 2em;">&nbsp;</div>
<br><br><br><br><br><br><br><br>

<!-- Brand tag -->
<div class="col-md-12 col-xs-12 col-md-11 col-lg-11 ubody">
    <div class="u-container col-md-9">
		<p style="text-align:center; font-size:30px; font-family: 'Playfair Display', serif;"> Featured Products </p>
    </div>
		<hr class="style18 col-md-11 col-md-offset-1">
	</div>
</div>





 <div class="container">
	 <div class="panel-table-container col-lg-3 col-md-3 col-sm-3 panel-group" id="features">
			<table class="panel-table">
			<tr class="body"><td><img src="../images/breguet/a4.jpg" width="300px" height="300px"></td></tr>
			 <tr><td>
				<footer class="panel-footer">
				<p class="brand playfair">Breguet</p>
				<p class="desc playfair">Tradition Automatic Skeleton</p>
				<p class="price playfair" style="margin-left:60px;">$17950</p>
				</footer>
				</td>
				</tr>

			</table>
		</div>

		 <div class="panel-table-container col-lg-3 col-md-3 col-sm-3">
			<table class="panel-table">
			<tr class="body"><td><img src="../images/bv/a4.jpg" width="300px" height="300px"></td></tr>
			 <tr><td>
				<footer class="panel-footer">
				<p class="brand playfair">Bvlgari</p>
				<p class="desc playfair">White Lacquered Dial</p>
				<p class="price playfair" style="margin-left:60px;">$4095</p>
				</footer>
				</td>
				</tr>

			</table>
		</div>

		 <div class="panel-table-container col-lg-3 col-md-3 col-sm-3">
			<table class="panel-table">
			<tr class="body"><td><img src="../images/omega/a4.jpg" width="300px" height="300px"></td></tr>
			 <tr><td>
				<footer class="panel-footer">
				<p class="brand playfair">Omega</p>
				<p class="desc playfair">Constellation Dial Silver</p>
				<p class="price playfair" style="margin-left:60px;">$1595</p>
				</footer>
				</td>
				</tr>

			</table>
		</div>

		 <div class="panel-table-container col-lg-3 col-md-3 col-sm-3">
			<table class="panel-table">
			<tr class="body"><td><img src="../images/breguet/a6.jpg" width="300px" height="300px"></td></tr>
			 <tr><td>
				<footer class="panel-footer">
				<p class="brand playfair">Breguet</p>
				<p class="desc playfair">Tradition Automatic Skeleton</p>
				<p class="price playfair" style="margin-left:60px;">$17950</p>
				</footer>
				</td>
				</tr>


			</table>
		</div>
</div>
</body>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Men </h3>
                    <ul>
                        <li><a href="../products.php?id=alange">A.Lange</a></li>
						<li><a href="../products.php?id=baume">Baume & Mercier</a></li>
						<li><a href="../products.php?id=breguet">Breguet</a></li>
						<li><a href="../products.php?id=chopard">Chopard</a></li>
						<li><a href="../products.php?id=elliot">Elliot</a></li>
						<li><a href="../products.php?id=hugo">Hugo</a></li>
						<li><a href="../products.php?id=montblanc">Montblanc</a></li>
						<li><a href="../products.php?id=patek">Patek Philippe</a></li>
						<li><a href="../products.php?id=rado">Rado</a></li>
						<li><a href="../products.php?id=versace">Versace</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Women </h3>
                    <ul>
                        <li><a href="../products.php?id=audemars">Audemars Piguet</a></li>
						<li><a href="../products.php?id=breitling">Breitling</a></li>
						<li><a href="../products.php?id=bvlgari">Bvlgari</a></li>
						<li><a href="../products.php?id=cartier">Cartier</a></li>
						<li><a href="../products.php?id=chanel">Chanel</a></li>
						<li><a href="../products.php?id=graff">Graff Diamonds</a></li>
						<li><a href="../products.php?id=gucci">Gucci</a></li>
						<li><a href="../products.php?id=omega">Omega</a></li>
						<li><a href="../products.php?id=rolex">Rolex</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Creators </h3>
                    <ul>
                        <li> <a href="#"> Sofia Charlliz B. Mallari </a> </li>
                        <li> <a href="#"> Vlad Nischkar C. Villanueva </a> </li>
                        <li> <a href="#"> Nina Marie Alban </a> </li>
                        <li> <a href="#"> Rainier Munoz </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Contact </h3>
                    <ul>
                        <li> <a href="#"> 720-50-11 </a> </li>
                        <li> <a href="#"> alphawatches@gmail.com </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Email </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Send <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="FACEBOOK.COM"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="twitter.com"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="google.com"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="pinterest.com"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="youtube.com"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © Alpha Watches 2017. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 