<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<!-- Mirrored from vm.1spotadsmedia.in/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2015 10:55:55 GMT -->
<head>
<title>About - V.M. Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Baumans' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
  <?php
  		include 'header.php';
  ?>
  
  <?php if(isset($_GET['id'])) 
  {
	  	$table = "content";
			$where = "ID = '" . $_GET ['id'] . "'";
			echo $where;
			$result = $Admin->display_record ( $table, $where );
			$display = mysql_fetch_array ( $result );?>  
	  ?>    <div class="main">
	 	<div class="wrap">
	 		 <div class="section group about_desc">
				<div><br /><br /><br />
					<h2 align="center"><?php echo $display['Contentname'];?></h2>
					<img src="images/about_img.jpg" alt="" style="margin-left:23%">
					<br><br>
					<p style="font-family:Cambria"><?php $content1 = file_get_contents("admin/" .$display['Content']);
				echo $content1;?><!--<img src="images/list-img.png">&nbsp;&nbsp;Spread across a sprawling plot area, our organization has developed a state-of-the-art infrastructure. The unit is provided with &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;advanced facilities and also have appreciable installation capacity.<br> <br>
					 </p><br><br>
<h2>We have segregated our unit into following departments:</h2><br />
					<ul>
						<li> Manufacturing</li><br />
						<li>Quality Assurance</li><br />
						<li>R & D </li><br />
						<li>Mission & Vision</li>
						
					</ul>
					<br><br>					
 					
					<p><img src="images/list-img.png">&nbsp;&nbsp;Our sophisticated manufacturing unit is laced with latest machines,  tools  and equipment for quality production of our products. </p>
				
				<br><br>
				
				<p><img src="images/list-img.png">&nbsp;&nbsp;Quality management units test the final products and our R&D unit helps us to know the changing market requirements.</p>
				
				<br><br>
				
				<p><img src="images/list-img.png">&nbsp;&nbsp;The manufactured products are safely stored at our unit and delivered on time via our world-class logistic department.--></p>
				
			</div>
			</div>
			</div>
			</div>
	<?php } ?>		
			
			
			
	 		 <div class="section group our_team">
				<div class="grid_1_of_4 images_1_of_4">
					 <img src="images/gellery-4.jpg" alt="">
					 <h3>Blister Pack Machine </h3>
					 
				</div>
                <div class="grid_1_of_4 images_1_of_4">
					 <img src="Blister Change Parts Set/New folder/Blister Pack Machine Change Parts Set.jpg" alt="">
					 <h3>Blister Pack Machine Change Parts Set</h3>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <img src="De-Blister Machine/De-Blister Machine - Copy.jpg" alt="">
					 <h3>De-Blister Machine</h3>
					 
				</div>
				
				<div class="grid_1_of_4 images_1_of_4">
					<img src="images/ink-jet.jpg" alt="">
					 <h3>Ink - jet Machine </h3>
					 
				</div>
			</div>
	 	
     <?php
	 	include 'footer.php';
	 ?>
</body>

<!-- Mirrored from vm.1spotadsmedia.in/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2015 10:58:27 GMT -->
</html>

