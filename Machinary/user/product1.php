  <?php include_once('header.php');?>
    	
    	<section>
    		<div class="container">
			  	<div class="row">
					<div class="col-sm-3 ">
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
                  				<div>	
                  					<div class="panel-heading">
                   						<h4 class="panel-title">
                     						<a data-toggle="collapse" data-parent="#accordian" href="<?php echo "#cate".$display['Cate_ID']; ?>">
                       							<span class="badge pull-right" id="<?php echo $tmp=$display['Cate_ID']?>">
                       								<i class="fa fa-plus-small"></i>
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
                     	 					<li >
                        						<span class="hidden-tablet">
                          							<a class="submenu" href="product1.php?subcat=<?php echo $display1['Sub_Cate_ID']; ?>" id="<?php echo $tp=$display1['Sub_Cate_ID']; ?>">
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
	        	<div class="col-sm-6 padding-right">
            		<div class="features_items"><!--Other furniture_items-->
						<h2 class="title text-center"></h2>
              			<?php
              			$table2="product";
              			$where2="Sub_Cate_ID=".$_GET['subcat'];
              			$result2=$Admin->display_record($table2,$where2);
              			while($display2=mysql_fetch_array($result2)){
              			?>
                		<div class="col-md-6 col-sm-6">
                  			<div class="panel">
								<div class="single-products">
								  	<div class="productinfo text-center" id="product">
                        			<?php
                        			$table3="product_image";
                        			$where3="Prod_ID=".$display2['Prod_ID'];
                        			$result3=$Admin->display_record($table3,$where3);
                        			while($display3=mysql_fetch_array($result3)){ ?>
								          <a href="product_display.php?Prod_ID=<?php echo $display2['Prod_ID'];?>">
								          	<img src="<?php echo $display3['Image_Path'];?>" alt="<?php echo $display3['Image_Path']; ?>" height="150" width="150"/>
								          </a>
                        			<?php } ?>
						            	<h3><?php echo "Rs.".$display2['price']; ?></h3>
                        				<p><?php echo $display2['Prod_Name']; ?></p>
							        	<a href="index (2).php?page=product&action=add&id=<?php echo $display2['Prod_ID'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart
							        	</a>
							        	<a href="whatsapp://send?text=http://shppl.com/product_display.php?Prod_ID= <?php echo $display2['Prod_ID']; ?>" class="btn btn-default"><i class="fa fa-whatsapp"></i></a>
									</div>
								</div>
                  			</div>
                		</div>
                		<?php } ?>
              		</div>
            	</div>
          	</div>
		 
<?php include 'footer.php';?>