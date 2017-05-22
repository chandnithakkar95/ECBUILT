<!DOCTYPE html>
<?php
   include("config/config.php");
?>
<html lang="en" >
<head>
    <script type="text/javascript">
      $(document).ready( function (e) {
        $("#subcat").change(function (e) {
          alert();
          var id=$(this).val();
        });
      });
    </script>
  
<?php 
if (isset ($_POST['add'] )) {
	$data['Description']=$_POST['Feedback'];
	$data['Prod_ID']=$_GET['Prod_ID'];
	$data['Cust_ID'];
	$Admin->insert_record('feedback',$data);
}else{
	if(isset($_POST['addCart'])){
		
	}
}
?>
<!-- META DATA -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Title -->
<title>Shppl</title>



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
	              <a href="index.php"><img class="img-responsive" src="images/logo (2).png" data-at2x="images/logo (2).png" alt="Logo" />
</a>
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
                  <li><a href="ofsindex.php" class="active">Home</a></li>
                  <li class="dropdown"><a  href="#">Shop<i class="faangledown"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="shop.php">Products</a></li>
						          <li><a href="checkout.php">Checkout</a></li>
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
	  <!-- <section id="slider"><!--slider
		  <div class="container">
			  <div class="row">
          <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							  <li data-target="#slider-carousel" data-slide-to="1"></li>
						    <li data-target="#slider-carousel" data-slide-to="2"></li>
						  </ol>
		          <div class="carousel-inner">
                <div class="item active">
								  <div class="col-sm-6"></div>
                  <div class="col-sm-12">
								    <img src="image/home/sarah-richardson-large-living-room-furniture-arrangements.jpg" class="girl img-responsive" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6"></div>
                  <div class="col-sm-12">
                    <img src="image/home/3_1456251723384.jpg" class="girl img-responsive" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6"></div>
					        <div class="col-sm-12">
                    <img src="image/home/g3.jpg" class="girl img-responsive" alt="" />
                  </div>
                </div>
              </div>
              <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
					    </a>
				      <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
					      <i class="fa fa-angle-right"></i>
              </a>
					  </div>
          </div>
			  </div>
		  </div>
    </section><!--/slider -->
    <section>
		  <div class="container">
			  <div class="row">
				  <div class="col-sm-3">
				    <div class="left-sidebar">
					    <h2>Category</h2>
              <div class="panel-group  category-products" id="accordian">
                <?php
                $table="category";
                $where='1=1';
                $result=$Admin->display_record($table,$where);
                while($display=mysql_fetch_array($result)){
                ?>
                <!--category-productsr-->
                <div class="">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="<?php echo "#cate".$display['Cate_ID']; ?>">
                        <span class="badge pull-right" id="<?php echo $tmp=$display['Cate_ID']?>"><i class="fa fa-plus-small"></i>
                        </span>
                        <?php echo $display['Cate_Name']."<br>";
                        $table1="sub_category";
                        $where1="Cate_ID=".$tmp;
                        $result1=$Admin->display_record($table1,$where1);
                        ?>
                      </a>
		                </h4>
                  </div>
                </div>
                <div id="<?php echo "cate".$display['Cate_ID']; ?>" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php
                    while($display1=mysql_fetch_array($result1)){
                    ?>
                    <ul>
                      <li>
                        <span class="hidden-tablet">
                          <a class="submenu" href="product.php?subcat=<?php echo $display1['Sub_Cat_ID']; ?>" id="<?php echo $tp=$display1['Sub_Cat_ID']; ?>">
                            <?php echo $display1['Sub_Cate_Name']; ?>
                          </a>
                        </span>
                      </li>
                    </ul>
                    <?php }  ?>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
		  <form method="post">
	        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--Other furniture_items-->
						  <h2 class="title text-center"></h2>
              <?php
              $table2="product";
              $where2="Prod_ID=".$_GET['Prod_ID'];
              $result2=$Admin->display_record($table2,$where2);
              while($display2=mysql_fetch_array($result2)){
              ?>
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
								    <div class="single-products">
										  <div class="productinfo text-center" id="product">
                        <?php
                        $table3="product_image";
                        $where3="Prod_ID=".$display2['Prod_ID'];
                        $result3=$Admin->display_record($table3,$where3);
                        while($display3=mysql_fetch_array($result3)){ ?>
								        <a href="product_display.php?Prod_ID= <?php echo $display2['Prod_ID'];?>"><img src="<?php echo $display3['Image_Path']; ?>" alt="<?php echo $display3['Image_Path']; ?>" /></a>
                        <?php } ?>
						            <h3><?php echo "Rs.".$display2['price']; ?></h3	>
							          <a href="index (2).php?page=product&action=add&id=<?php echo $display2['Prod_ID']; ?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart"> </i>Add to cart</a>
										  </div>
										</div>
								    </div>
								</div>
                  <div class="col-sm-8">
  								    <div class="single-products">
  										  <div class="productinfo text-center" id="product">
                          <h2><?php echo $display2['Prod_Name']; ?></h2>
                        </div>
                      </div>
                        <div class="col-sm-6 productinfo text-center">
                          <h3>Height:<input class="form-control "type="text" value="<?php echo $display2['Height']; ?>" >
                            <h3>Width:</h3><input class="form-control "type="text" value="<?php echo $display2['Width']; ?>" >
                            <h3>Depth:</h3><input class="form-control "type="text" value="<?php echo $display2['Depth']; ?>" >
                            <h3>Description:</h3>
                        </div>
                        <div class="col-sm-12">
                          <p><?php echo $display2['Prod_Description']; ?></p>
                        </div>
                      </div>
  					</div>
                  </div>
                </div>
				<div class="panel-group category-products"><?php
					$table4="Feedback";
					$where4="Prod_ID=".$display2['Prod_ID'];
					$result4=$Admin->display_record($table4,$where4);
                    while($display4=mysql_fetch_array($result4)){ ?>
					<h2><?php $tb="customer";
							  $whre="Cust_ID".$display2['Cust_ID'];					
							  $re=$Admin->display_record($tb,$whre);
							  while($dis=mysql_fetch_array($re)){
							  echo $dis['Cust_Name'];
							  }
							  ?></h2>
					<h2> <?php echo $display4['Description']; ?></h2>
					<?php }?>
				</div>
				<div class="col-sm-2 productinfo text-center">
                          <h2>Feedback:</h2>
                        </div>
                        <div align="right"class="col-sm-12">
                          <p><textarea rows=5 cols=20 name="feedback" placeholder="Give Your Feedback........"></textarea>
                            <br> <br><button class="btn btn-feedback " href="#" name="add" > Feedback</button>  										  </div>
                <?php } ?>
              </div>
            </div>
          </div>
				  <div class="recommended_items">
						<h2 class="title text-center">recommended items</h2>
					    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
					      <div class="carousel-inner">
						      <div class="item active">
							      <div class="col-sm-4">
									    <div class="product-image-wrapper">
										    <div class="single-products">
										      <div class="productinfo text-center">
											      <img src="image/home/pic3 - Copy.jpg" alt="" />
											      <h2>Rs. 16,000</h2>
										        <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </a>
											    </div>
										    </div>
									    </div>
									  </div>
									  <div class="col-sm-4">
									    <div class="product-image-wrapper">
										    <div class="single-products">
											    <div class="productinfo text-center">
											      <img src="image/home/images-43.jpeg" alt="" />
												    <h2>$56</h2>
												    <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </a>
											    </div>
										    </div>
										  </div>
									  </div>
									  <div class="col-sm-4">
										  <div class="product-image-wrapper">
											  <div class="single-products">
												  <div class="productinfo text-center">
													  <img src="image/home/p7.jpg" alt="" />
													  <h2>$56</h2>
													  <a href="#" class="btn btn-default add-to-cart">
                              <i class="fa fa-shopping-cart"></i>Add to cart
                            </a>
											    </div>
										    </div>
									    </div>
								    </div>
						      </div>
							    <div class="item">
								    <div class="col-sm-4">
									    <div class="product-image-wrapper">
											  <div class="single-products">
												  <div class="productinfo text-center">
													  <img src="image/home/11_1456252203416.jpg" alt="" />
												    <h2>$56</h2>
												    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart
                            </a>
											    </div>
										    </div>
									    </div>
									  </div>
									  <div class="col-sm-4">
										  <div class="product-image-wrapper">
											  <div class="single-products">
												  <div class="productinfo text-center">
											      <img src="image/home/4_1456251696488.jpg" alt="" />
												    <h2>$56</h2>
												    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart
                            </a>
											    </div>
										    </div>
									    </div>
								    </div>
									  <div class="col-sm-4">
										  <div class="product-image-wrapper">
											  <div class="single-products">
												  <div class="productinfo text-center">
													  <img src="image/home/p6.jpg" alt="" />
											      <h2>$56</h2>
												    <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											    </div>
										    </div>
										  </div>
									  </div>
								  </div>
								</div>
							  <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								  <i class="fa fa-angle-left"></i>
							  </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								  <i class="fa fa-angle-right"></i>
							  </a>
						  </div>
					  </div>
			    </div>
		    </div>
		  </div>
	  </section>
	  <footer id="footer"><!--Footer-->
		  <div class="footer-bottom">
			  <div class="container">
				  <div class="row">
					  <p class="pull-left">Copyright © 2015 StrongHold Packaging  . All rights reserved.</p>
					  <p class="pull-right">Designed by <span><a target="_blank" href="http://www.thereasonablesinfotect.in/">The Reasonables Infotect</a></span></p>
				  </div>
			  </div>
		  </div>
	  </footer>

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/retina.min.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<!-- Maps -->

<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="js/maps.js"></script>-->
<!-- /Maps -->
<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="js/jquery.parallaxify.min.js"></script>
<script type="text/javascript" src="js/jquery.particleground.min.js"></script>
<script type="text/javascript" src="js/vegas.min.js"></script>
<script type="text/javascript" src="js/trianglify.min.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/main.js"></script>