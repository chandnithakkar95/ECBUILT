<!DOCTYPE html>
<?php include 'header.php';?>
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
              <div class="panel-group panel category-products" id="accordian">
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
	        <div class="col-sm-9 padding-right panel">
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
				
                <?php } ?>
              </div>
            </div>
          </div>
<?php include 'footer.php';?>