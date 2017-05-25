	<div class="recommended_items">
				<h2 class="title text-center">recommended items</h2>
				<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner panel">				
														<?php $where="1=1";
												$re=$Admin->display_record_limit('slider',$where,1);
												while($display1=mysql_fetch_array($re)){
                   				
										?>	
							<div class="item active">
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											    <img src="<?php echo $display1['Sliderimage']?>" alt="" />
											    <!--<h2>Rs. 16,000</2>-->
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
								</div>
							<?php }?>
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
<script type="text\javascript">
      $(document).ready( function (e) {
        $("#subcat").change(function (e) {
          alert();
          var id=$(this).val();
        });
      });
    </script>
<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 StrongHold Packaging. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">The Resonables Infotect</a></span></p>
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
</body>
</html>