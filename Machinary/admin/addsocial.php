<?php
include('config/config.php');

if(isset($_POST['AddSocial']))
{
	$data['Socialname'] = $_POST['SocialName'];
	$data['Sociallink'] = $_POST['SocialLink'];
	$data['Socialimage'] = "image/social/".$_FILES['SocialImage']['name'];
	
	$Admin->insert_record('social',$data);
	
	$name=$_FILES["SocialImage"]["name"];
	$tname=$_FILES["SocialImage"]["tmp_name"];
	$path="image/social/$name";
	move_uploaded_file($tname,$path);
	header('Location:addsocial.php');
}
if(isset($_POST['EditSocial']))
{
	$img = $_POST['img'];
	$data['Socialname'] = $_POST['SocialName'];
	$data['Sociallink'] = $_POST['SocialLink'];
	if($_FILES ['SocialImage'] ['name']=="")
	{
			$data['Socialimage'] = $img;
	}
	else
	{
		$data['Socialimage'] = "image/social/".$_FILES['SocialImage']['name'];
		$name=$_FILES["SocialImage"]["name"];
		$tname=$_FILES["SocialImage"]["tmp_name"];
		$path="image/social/$name";
		move_uploaded_file($tname,$path);
	
	}

 	$where = "ID = '".$_GET['id']."'";
	$Admin->update_record('social',$data,$where);
	
	header('Location:managesocial.php');
	
	
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>DigitalSmesMedia | Admin</title>
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
    <script src="js/admin.js" type="text/javascript"></script>
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
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Social</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Social</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <?php if(!isset($_GET['action'])) 
					{?>
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>
                          
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Social Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="SocialName">
								</div>
							  </div>
                              
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Social Link</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="SocialLink">
								</div>
							  </div>
							
                            <div class="control-group">
							  <label class="control-label" for="fileInput"> Social Image<label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="SocialImage">
							  </div>
							</div> 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="AddSocial">Add Social</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>
                           <?php }
			
			if(isset($_GET['action']) && isset($_GET['id']))
			{
			$table = "social";
			$where = "ID = '" . $_GET ['id'] . "'";
			$result = $Admin->display_record ( $table, $where );
			$display = mysql_fetch_array ( $result );?>   
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>
                           <input type="hidden" name="ID" value="<?php echo $display['ID']; ?>" />
                          
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Social Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="SocialName"  required="required" placeholder="Enter Product Name" 
                      value="<?php if(isset($display['Socialname'])){echo $display['Socialname'];} ?>" />
								</div>
							  </div>
                              
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Social Link</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="SocialLink"  required="required" placeholder="Enter Product Name" 
                      value="<?php if(isset($display['Sociallink'])){echo $display['Sociallink'];} ?>" />
								</div>
							  </div>
                              
                            <div class="control-group">
							  <label class="control-label" for="fileInput"> Social Image<label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="SocialImage">
                                
                      <input type="hidden" name="img" value="<?php echo $display['Socialimage']; ?>" />
							  </div>
							</div> 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="EditSocial">Edit Social</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>
                        <?php }?>
					</div>
				</div><!--/span-->

			</div><!--/row-->

			
			</div><!--/row-->
		
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	
	<div class="clearfix"></div>
	
	<?php include("footer.php");?>
	
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
