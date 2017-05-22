<?php include("config/config.php");
 ?>
<?php
if(isset($_POST['AddGallery'])){
  $data['Prod_ID'] =$_POST['ProductID'];
  $data['Image_Path'] ="image/product/".$_FILES['Image']['name'];
  $Admin->insert_record('product_image',$data);
  $name=$_FILES["Image"]["name"];
  $tname=$_FILES["Image"]["tmp_name"];
  $path="image/product/$name";
  move_uploaded_file($tname,$path);
  header('Location:addgallery.php');
  }
  if(isset($_POST['EditGallery'])){
    $img = $_POST['img'];
      $data['Prod_ID'] =$_POST['ProductID'];
    $data['Product_Image_Name'] = $_POST['ImageName'];
    if($_FILES ['Image']['name']==""){
      $data['Product_Image_Name'] = $img;
    }
    else{
    $data ['Product_Image_Name'] = "image/product/".$_FILES ['Image']['name'];
    $name=$_FILES["Image"]["name"];
    $tname=$_FILES["Image"]["tmp_name"];
    $path="image/product/$name";
    move_uploaded_file($tname,$path);
    }
  $where ="Product_Image_ID ='".$_GET['id']."'";
  $Admin->update_record('product_image',$data,$where);
  header('Location:managegallery.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- start: Meta -->
    <meta charset="utf-8">
      <title>Ashapuri Furniture | Admin</title>
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
                  <a href="#">Product Image</a>
                </li>
            </ul>
            <div class="row-fluid sortable">
              <div class="box span12">
                <div class="box-header" data-original-title>
                  <h2>
                    <i class="halflings-icon edit"></i>
                    <span class="break"></span>Add Prodct Image
                  </h2>
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
                      $table="product";
                      $where="1=1";
                      $result=$Admin->display_record($table,$where);
                    ?>
                      <label class="control-label" for="selectError3">Product Name</label>
                      <div class="controls">
                        <select id="selectError3" name="ProductID" >
                            <option>--Select--</option>
                              <?php while($display = mysql_fetch_array($result)) {?>
                            <option value="<?php echo $display['Prod_ID']; ?>"><?php echo $display['Prod_Name']; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="fileInput">Image</label>
                    <div class="controls">
                      <input class="input-file uniform_on" id="fileInput" type="file" name="Image">
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary" name="AddGallery">Add</button>
                    <button type="reset" class="btn">Cancel</button>
                  </div>
                </fieldset>
              </form>
      <?php }
        if(isset($_GET['action']) && isset($_GET['id']))
        {
          $table = "product_image";
          $where = "Prod_Image_ID =". $_GET ['id'];
          $result = $Admin->display_record ( $table, $where );
          $display = mysql_fetch_array ( $result );?>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <fieldset>
                  <div class="control-group">
                    <input type="hidden" name="ID" value="<?php echo $display['Prod_Image_ID']; ?>" />
                      <?php
                        $table='product';
                        $where = "Prod_ID =".$display['Prod_Id'];
                        $re1=$Admin->display_record($table,$where);
                         ?>
                    <label class="control-label" for="selectError3">Prodct Name</label>
                      <div class="controls">
                        <select id="selectError3" name="ProductID">
                          <option>--Select--</option> 
                            <?php while($data=mysql_fetch_object($re1)){?>
                          <option value="<?php echo $data->Prod_ID; ?>" <?php if($display['Prod_Id'] == $data->Prod_ID){echo "selected";}?>><?php echo $data->Prod_Name; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>
                  <div class="control-group">
                    <label class="control-label" for="fileInput">Image<label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" type="file" name="Image" onChange="javascript:alert(getElementById('focusedInput').value =this.value);">
                        <input type="hidden" name="img" value="<?php echo $display['Image_Path']; ?>" />
                    </div>
                  </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary" name="EditGallery">Edit</button>
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
