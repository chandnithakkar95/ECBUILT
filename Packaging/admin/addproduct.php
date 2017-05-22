<?php
include('config/config.php');
$prod_id="";
if(isset($_POST['AddProduct']))
{	
	$data['Cate_ID'] = $_POST['CategoryID'];
	$data['Sub_Cate_ID'] = $_POST['SubCategoryID'];
	$data['Prod_Name'] = $_POST['ProductName'];
	$data['Prod_Description'] = $_POST['ProductDescription'];
	$data['Prod_link'] = "";
	$data ['C_date']=date("Y/m/d");
	$data ['U_date']=date("Y/m/d");
	$data['Prod_Status'] = "1";	
	$data['Quantity']=$_POST['qty'];
	$prod_id=$Admin->insert_record('product',$data);
	if($_POST['QualityCheck']=="on"){
		$i=0;
		foreach($_REQUEST['prodCheck'] as $val){
			$QtyData['Q_name']=$_REQUEST['prodCheck'][$i];
			$QtyData['price']=$_REQUEST['price'][$i];
			$QtyData['Prod_ID']=$prod_id;
			$Admin->insert_record('quality',$QtyData);
			$i++;
		}
	}else{
		$QtyData['Q_name']="default";
		$QtyData['price']=$_POST['price1'];
		$QtyData['Prod_ID']=$prod_id;
		$Admin->insert_record('quality',$QtyData);
	}
	//$name=$_FILES["ProductImage"]["name"];
	//$tname=$_FILES["ProductImage"]["tmp_name"];
	//$path="image/product/$name";
	//move_uploaded_file($tname,$path);
	//$name1=$_FILES["ProductLink"]["name"];
	//$tname1=$_FILES["ProductLink"]["tmp_name"];
	//$path1="image/product/$name1";
	//move_uploaded_file($tname1,$path1);
	header('Location:addproduct.php');
}
if(isset($_POST['EditProduct']))
{
	//echo "<pre>";
	//print_r($_POST);
	//exit;
	//$img = $_POST['img'];
	//$img1 = $_POST['img1'];
	$data['Cate_ID'] = $_POST['CategoryID'];
	$data['Sub_Cate_ID'] = $_POST['SubCategoryID'];
	$data['Prod_Name'] = $_POST['ProductName'];
	$data['Prod_Description'] = $_POST['ProductDescription'];
	$data['Prod_link'] = "";
	$data ['U_date']=date("Y/m/d");
	$data['Prod_Status'] = "1";	
	$data['Quantity']=$_POST['qty'];
	$where = "prod_id =".$_GET['id'];
	$Admin->update_record('product',$data,$where);
		$i=0;
		foreach($_REQUEST['prdCheck'] as $val){
			$QtyData['Q_name']=$_REQUEST['prdCheck'][$i];
			$QtyData['price']=$_REQUEST['pice'][$i];
			$where = "Prod_ID =".$_GET['id'];
			$Admin->update_record('quality',$QtyData,$where);
			$i++;
		}
	header('Location:manageproduct.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title> Admin</title>
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
	<script src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript">
	

	jQuery(document).ready(function($) {
		var rowcnt = 1;
		$('#QtlyShow').hide();
		$('#pr1').show();
		$('#qltycheck').change(function(){
			if ($(this).is(':checked')){
				$('#QtlyShow').show();
				$('#pr1').hide();
			}
			else {
			$('#QtlyShow').hide();
			$('#pr1').show();
			}
		}).change();
        
        $("#supid").change(function(e) {
			var id = $(this).val();
			$.ajax({
				type: 'POST',
				dataType:'json',
				url: "getrawmaterial.php",
				data: "suppid=" + id,
				success: function(response) {
					$(".sub_cate").html(response);
				}
			});
		});


		$(document).on('click','.addrow',function() {
			var id = getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10) + "_" + getRandomInt(1, 10);
			var html = '<?php $randUniqueId = md5(rand(0, 99) . time()); ?>	<?php ?><div id="'+rowcnt+'"><label class="control-label" for="focusedInput_'+rowcnt+'">Product Quality check</label><div class="controls" name="newrow" id="newrow"><input class="input-xlarge focused" id="focusedInput_'+rowcnt+'" type="text" name="prodCheck[]"><input class="input-xlarge focused" id="price_'+rowcnt+'" placeholder="Price" type="text" name="price[]"><i><a id="addrow_'+rowcnt+'" removeid="'+rowcnt+'" class="glyphicons-icon circle_minus removerow"></a></i></div></div>';
			$("#QtlyShow").append(html);
			rowcnt++;
		});


		$(document).on('click','.removerow',function(e){
			e.preventDefault();
			var removeid = $(this).attr('removeid');
			$('#'+removeid).remove();
			rowcnt--;
		});

	});
	</script>
<!--		<script type="text/javascript">

            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            function updateIsAnswer(value, id)
            {
                $("#hiddenRef_" + id).val(value);
            }
            </script>
	-->	
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
					<a href="#">Product</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
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
                            <?php
					$table="category";
					$where="1=1";
				    $result=$Admin->display_record($table,$where); 
					?>
								<label class="control-label" for="supid">Category Name</label>
								<div class="controls">
								  <select id="supid" name="CategoryID"  onchange="fetch_sub_category(this.value);">
									<option>--Select--</option>
									<?php while($display = mysql_fetch_array($result)) {?>
                        <option value="<?php echo $display['Cate_ID']; ?>"><?php echo $display['Cate_Name']; ?></option>
                        <?php } ?>
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="sub_cate">Sub-Category Name</label>
								<div class="controls">
								  <select name="SubCategoryID" id="sub_cate" class="sub_cate">
									<option>--Select--</option>
									
								  </select>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Product Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="ProductName">
								</div>
							  </div>
                              	<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="ProductDescription"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="textarea3">Product Quantity</label>
							  <div class="controls">
								<input class="input-xlarge focused" id="textarea3" type="text" rows="3" name="qty"/>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="qltycheck">Quality?<label>
							  <div class="controls">
								<input class="input-file uniform_on" id="qltycheck" type="checkbox" name="QualityCheck">
							  </div>
							</div>
                             <div class="control-group" id="QtlyShow">
                             	<div>
									<label class="control-label" for="focusedInput_0">Product Quality check</label>
										<div class="controls" name="newrow" id="newrow">
								  			<input class="input-xlarge focused" id="focusedInput_0" type="text" name="prodCheck[]">
											<input class="input-xlarge focused" id="price_0" placeholder="Price" type="text" name="price[]">
											<i><a id="addrow_0" class="glyphicons-icon circle_plus addrow"></a></i>
										</div>
							 	</div>
							 </div>
							 <div class="control-group" id="pr1">
								<label class="control-label" for="price1">Price</label>
										<div class="controls">
										<input class="input-xlarge focused" id="price1" type="text" name="price1"/>
								  	</div>
							 </div>
                        <!--     <div class="control-group">
							  <label class="control-label" for="fileInput">Product Link<label>
							  <div class="controls">
									<button type="button" class="btn btn-primary" name="ProductLink" id="ProductLink" onclick="add();">Genrate Link</button>
							  </div>
							  <i class="control-label" id='linked'></i>
							</div> 
							-->
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="AddProduct">Add Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>
                           <?php }
			
			if(isset($_GET['action']) && isset($_GET['id']))
			{
			$table = "product";
			$where = "Prod_ID =". $_GET ['id'];
			$result = $Admin->display_record ( $table, $where );
			$display = mysql_fetch_array ( $result );?>   
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>
                            <div class="control-group">
                        
              					<input type="hidden" name="ID" value="<?php echo $display['Prod_ID']; ?>" />
                           
                            <?php 
					  $table='category';
				  $where = "1 =1";
				 // $re=$Admin->display_record($table,"ID = '".$display['Cate_ID']."'");
				  $re1=$Admin->display_record($table,$where);  
				 ?>
                  
								<label class="control-label" for="selectError3">Category Name</label>
								<div class="controls">
								  <select id="selectError3" name="CategoryID">
									<option>--Select--</option>
									<?php while($data=mysql_fetch_object($re1)){?>
                  <option value="<?php echo $data->Cate_ID; ?>" <?php if($display['Cate_ID'] == $data->Cate_ID){echo "selected";}?>><?php echo $data->Cate_Name; ?></option>
                  <?php } ?>
								  </select>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="selectError3">Sub-Category Name</label>
                                    <?php 
					  $table='sub_category';
				  $where = "1=1";
				//  $re=$Admin->display_record($table,'1');
				  $re1=$Admin->display_record($table,$where);  
				?>
								<div class="controls">
								  <select name="SubCategoryID" id="selectError3">
									<option>--Select--</option>
                                     <?php while($data=mysql_fetch_object($re1)){?>
                  <option value="<?php echo $data->Sub_Cate_ID; ?>" <?php if($display['Sub_Cate_ID'] == $data->Sub_Cate_ID){echo "selected";}?>><?php echo $data->Sub_Cate_Name; ?></option>
                  <?php } ?>
								  </select>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Product Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="ProductName"  required="required" placeholder="Enter Product Name" 
                      value="<?php if(isset($display['Prod_Name'])){echo $display['Prod_Name'];} ?>" />
								</div>
							  </div>
                              	<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="ProductDescription" required placeholder="Enter Description"><?php if(isset($display['Prod_Description'])){echo $display['Prod_Description'];} ?></textarea>
							  </div>
							</div>
                             <!--<div class="control-group">
							  <label class="control-label" for="fileInput">Product Link<label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="ProductLink">
                                
                      <input type="hidden" name="img1" value="<?php echo $display['Productlink']; ?>" />
							  </div>
							</div>--> 
							<?php 
							$table1="quality";
							$where="Prod_ID=".$display['Prod_ID'];
							$re1=$Admin->display_record($table1,$where); ?>
							<div class="control-group" id="QtlySh">
                            <?php
							while ($data1=mysql_fetch_object($re1)) {
							?>
							 	<div>
									<label class="control-label" for="focusedInut_0">Product Quality check</label>
										<div class="controls" name="newrw" id="newrw">
								  			<input class="input-xlarge focused" id="focusedIut_0" value="<?php echo $data1->Q_name ?>" type="text" name="prdCheck[]">
											<input class="input-xlarge focused" id="pice_0" placeholder="Price" value="<?php echo $data1->price ?> " type="text" name="pice[]">
											<i><a id="addrw_0" class="glyphicons-icon circle_plus addrw"></a></i>
										</div>
							 	</div>
							 
							 <?php	
								}	
							?>
</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="EditProduct">Edit Product</button>
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