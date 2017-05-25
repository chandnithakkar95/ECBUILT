<?php include("config/config.php");
 if(!isset($_SESSION['admin']['Username']))
{
	header('Location:index.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SHPPL | Admin</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
	<?php include("header.php")?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
			<?php include("menu.php")?>
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="dashboard.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="dashboard.php">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
                 
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
                     <?php $count_category = $Admin->count_row('category','Cate_Status=1');?>
					<div class="number"><?php echo $count_category[0]+1; ?><i class="icon-arrow-up"></i></div>
                   <div class="title">Category</div>
					<div class="footer">
						<a href="managecategory.php"> Look into..</a>
					</div>	
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
                    <?php $count_subcategory = $Admin->count_row('sub_category','Sub_Cate_Status=1');?>
					<div class="number"><?php echo $count_subcategory[0]; ?><i class="icon-arrow-up"></i></div>
					<div class="title">Sub-Category</div>
					<div class="footer">
						<a href="managesubcategory.php"> Look into..</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
                     <?php $count_gallery = $Admin->count_row('gallery','Gallerystatus=1');?>
					<div class="number"><?php echo $count_gallery[0]; ?><i class="icon-arrow-up"></i></div>
					<div class="title">Gallery</div>
					<div class="footer">
						<a href="managegallery.php"> Look into..</a>
					</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
                    <?php $count_slider = $Admin->count_row('slider','Sliderstatus=1');?>
					<div class="number"><?php echo $count_slider[0]; ?><i class="icon-arrow-down"></i></div>
					<div class="title">Slider</div>
					<div class="footer">
						<a href="manageslider.php"> Look into..</a>
					</div>
				</div>	
				
			</div>		
	
			<div class="row-fluid">				
				<a class="quick-button metro green span2" href="manageproduct.php">
					<i class="icon-barcode"><?php $count_product = $Admin->count_row('product','Productstatus=1');?></i>
					<p>Products</p>
					<span class="badge"><?php echo $count_product[0]; ?></span>
				</a>
				<div class="clearfix"></div>
								
			</div><!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
	
	<div class="clearfix"></div>
	

	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
