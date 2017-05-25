<!DOCTYPE html><?php
   include("config/config.php");
?>
<html lang="en" >
<head>

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
		<div class="container-fluid">
			<?php $table1="social";
				$where1="1=1";
				$result1=$Admin->display_record($table1,$where1);
				while($display1=mysql_fetch_array($result1)){	
				?>
				<img class="img-responsive" src="<?php echo $display1['C_Image'];?>"/>
				<div style="position:absolute; z-index:1; width:200px; background:#c0c0c0; height:200px; margin-top:-250px; margin-left:60px; display:block; border:4px solid #FFF;">
				<img  height="100%" width="100%" src="<?php echo $display1['P_Image'];?>" data-at2x="<?php echo $display1['P_Image'];?>" alt="Logo" />
				</div>
				
			<div>
			
				<iframe width="560" height="315" src="https://www.youtube.com/embed/3AtDnEC4zak" frameborder="0" allowfullscreen></iframe>
			</div>
	  <center>
		<h1> 	<?php echo $display1['C_Name']; ?>
	</h1>
	 </center>
   <div class="row-fluid">
	<h2>About Us</h2>
	  <h4><?php echo display1['About_us']?></h4>
</div>
   <div class="row-fluid">

<h2>
Achivements</h2>
<h4><?php echo $display1['Achivements'] ?>
</h4>
</div>
   
						  <?php }?>	
</div>

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

</body>
</html>