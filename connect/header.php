<?php ob_start();?>
<!DOCTYPE HTML>
<html>
<head><meta charset="utf-8"><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script async="" src="https://www.google-analytics.com/analytics.js"></script>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Slabo+27px" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
<link href="../fonts/fonts.html" rel="stylesheet">
<link href="../css/products.css" rel="stylesheet">
<link href="../css/register.css" rel="stylesheet">
<link href="../css/fonts.css" rel="stylesheet">
<link href="../css/underline.css" type="text/css" rel="stylesheet">
<link href="../css/footer.css" type="text/css" rel="stylesheet">
<title>Alpha: Wrist Watch</title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" ><img src="../images/A.png" id="#logo" class="col-md-6 col-xs-5"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-center">
        <li><a href="../connect/index.php">Home<span class="sr-only">(current)</span></a></li>

		  <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Men
				<span class="caret"></span>
		  </a>
		  
         
          <ul class="dropdown-menu">
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
        </li>


		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				Women
				<span class="caret"></span>
		  </a>
          <ul class="dropdown-menu">
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
        </li>


		<li><a href="#features">Features<span class="sr-only"></span></a></li>
		<li><a href="#footer">About us<span class="sr-only"></span></a></li>
		<li><a href="#footer">Contact us<span class="sr-only"></span></a></li>
		
		 <?php
		
        if(empty($_SESSION['user_id'])){
          echo "<li><a href='../login.php'>Login<span class='sr-only'></span></a></li>";
          echo "<li><a href='../register.php'>Register<span class='sr-only'></span></a></li>";
        }

        else{

          include ('conn.php');
		  
          $result = mysqli_query($conn, "SELECT * FROM reg WHERE user_id = '".$_SESSION['user_id']."'");
          $row = mysqli_fetch_assoc($result);
		  $name=$row['fname'];

          echo "<li><a href='../home.php'>".ucfirst($name)."<span class = 'sr-only></span></a></li>";

          echo "<li><a href='../logout.php'><span class='sr-only'></span></a></li>"; 

          echo "<li><a href='../logout.php'> Logout <span class='sr-only'></span></a></li>";

        
		}

    ?>
		

      <!--<form class="navbar-form pull-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
		<div class="btn-group">
        <button type="button" class="btn btn-default btn-lg btn-new">
		        <span class="glyphicon glyphicon-search new-glyph" aria-hidden="true"> </span>
        </button>
        <button type="button" class="btn btn-default btn-lg btn-new">
		        <span class="glyphicon glyphicon-shopping-cart new-glyph" aria-hidden="true"> </span>
	      </button>
		</div>
      </form>-->
	  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>