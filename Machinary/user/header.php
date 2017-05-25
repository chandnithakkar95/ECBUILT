<!DOCTYPE html>
<?php
include("config/config.php");
?>
<head>
<style>
.dropbtn {
    /*background-color: #4CAF50;*/
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<!-- META DATA -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Title -->
<title>Shppl | Welcome </title>



<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" >

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/ionicons.min.css" />
<link rel="stylesheet" type="text/css" href="css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
<link rel="stylesheet" type="text/css" href="css/vegas.min.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/sidebar.css" />

<!-- Fonts -->	
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,900' rel='stylesheet' type='text/css'>


<!-- JS -->
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/snap.svg-min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://webnextbd.net/demo/js/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 11]>
<link rel="stylesheet" type="text/css" href="http://webnextbd.net/demo/css/ie.css">
<![endif]-->

</head>
<body class="image-background">

	<!-- Preloader -->
	<div id="preloader">
		<div id="loading-animation">&nbsp;</div>
	</div>
	<!-- /Preloader -->

	<!-- Overlay -->
	<div id="section-home" class="home-section-wrap center">
		<div class="section-overlay"></div>
	</div>
	<!-- /Overlay -->

	<!-- container -->
	<div class="containers">
		<!-- menu -->
		<nav id="menu" class="menu">
			<button class="menu__handle">
				<span>Menu</span>
			</button>
			<div class="menu__inner">
				<ul>
					<li><a href="index.html"><i class="fa fa-fw fa-home"></i><span>Home</span></a></li>
					<li><a href="about.html"><i class="fa fa-fw fa-info"></i><span>About</span></a></li>
					<li><a href="team.html"><i class="fa fa-fw fa-users"></i><span>Team</span></a></li>
					<li><a href="services.html"><i class="fa fa-fw fa-gear"></i><span>Services</span></a></li>
					<li><a href="portfolio.html"><i class="fa fa-fw fa-camera"></i><span>Portfolio</span></a></li>
					<li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i><span>Contact</span></a></li>
				</ul>
			</div>
			<div class="morph-shape"
				data-morph-open="M300-10c0,0,295,164,295,410c0,232-295,410-295,410"
				data-morph-close="M300-10C300-10,5,154,5,400c0,232,295,410,295,410">
				<svg width="100%" height="100%" viewBox="0 0 600 800"
					preserveAspectRatio="none">
<path fill="none" d="M300-10c0,0,0,164,0,410c0,232,0,410,0,410" />
</svg>
			</div>
		</nav>
		<header id="header">
	     	 <div class="header_top">
	        	<div class="container">
	          		<div class="row">
	            		<div class="col-sm-6">
	              			<div class="contactinfo">
	              				<ul class="nav nav-pills">
	                					<!-- contact details-->
					 			</ul>
							</div>
	            		</div>
						<div class="col-sm-6">
	              			<div class="social-icons pull-right">
	                			<ul class="nav navbar-nav">
									<li><a href="http://facebook"><i class="fa fa-facebook"></i></a></li>
							      	<li><a href="http://twitter"><i class="fa fa-twitter"></i></a></li>
						        	<li><a href="http://linkedin"><i class="fa fa-linkedin"></i></a></li>
				            		<li><a href="http://dribbble"><i class="fa fa-dribbble"></i></a></li>
		               				<li><a href="http://googleplus"><i class="fa fa-google-plus"></i></a></li>
							    </ul>
			          		</div>
	            		</div>
			      	</div>
	        	</div>
	      	</div>
	      	<div class="header-middle"><!--header-middle-->
	        	<div class="container">
	          		<div class="row">
	            		<div class="col-sm-4">
				       		<div class="logo pull-left">
				            <a href="index.php">
<?php $where="1=1";
									$result=$Admin->display_record('logo',$where);
									while($display1=mysql_fetch_array($result)){?>
										
				<img class="img-responsive" src="<?php echo $display1['Logoimage']; ?>" data-at2x="<?php echo $display1['Logoimage']; ?>" alt="Logo" />
						</a>
									<?php }?>
						</div>
	              			<div class="btn-group pull-right">
	               				<div class="btn-group"></div>
					        	<div class="btn-group"></div>
	              			</div>
	            		</div>
	            		<div class="col-sm-8">
	              			<div class="shop-menu pull-right">
	               				<ul class="nav navbar-nav">
							     	<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
					          		<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
					        	</ul>
						    </div>
			        	</div>
			    	</div>
			   	</div>
	      	</div><!--/header-middle-->
	      	<div class="header-bottom">
	        	<div class="container">
				    <div class="row">
	            		<div class="col-sm-9">
				        	<div class="navbar-header">
							    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			              			<span class="sr-only">Toggle navigation</span>
								    <span class="icon-bar"></span>
								    <span class="icon-bar"></span>
								    <span class="icon-bar"></span>
							    </button>
	              			</div>
						    <div class="mainmenu pull-left">
							    <ul class="nav navbar-nav collapse navbar-collapse">
									<li class="dropdown"><a  href="#">Home<i class="faangledown"></i></a></li>
	                  				<li class="dropdown"><a  href="#">Shop<i class="faangledown"></i></a>
	                    				<ul role="sub-menu" class="dropdown-content sub-menu">
	                     					<li ><a href="product.php">Products</a></li>
							        		<li> <a href="checkout.php">Checkout</a></li>
								        	<li><a href="index (2).php?page=product&action=cart">Cart</a></li>
	                    				</ul>
	                  				</li>
								    <li><a href="contact-us.php">Contact</a></li>
					        	</ul>
			        		</div>
			        	</div>
					    <div class="col-sm-3"> 
						    <div class="search_box pull-right">
							    <input type="search" name="search" id="search" placeholder="Search"/>
						    </div>
					    </div>
			      	</div>
			   	</div>
		    </div><!--/header-bottom-->
	    </header><!--/header-->
	              			