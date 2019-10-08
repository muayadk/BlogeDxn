
<?php include('header.php'); ?>
<link rel="stylesheet" href="css/swipebox.css">
 <!------ Light Box ------>
    <script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
    <!------ Eng Light Box ------>
<div class="photos">

<div class="container">
    
		<h2>Photos</h2>	
<!-- portfolio-section --> 
    
	         <div class="portfolio"  id="portfolio">
			 
				<div id="portfoliolist">
				 <?php $img=$obj-> getAllImages(); 
					 foreach($img as $m )
					 {
						 ?>
					<div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							<a href="admin/images/<?php echo$m['img_name'] ?>" class="swipebox"  title="Image Title"> <img src="admin/images/<?php echo$m['img_name'] ?>" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
						</div>
					</div>				
								
					   <?php } ?>
								
								
					
												

					
					</div>							
					<div class="clearfix"></div>					
			</div>
					<div class="clearfix"></div>
		 
		</div>
	
					
   
	</div>
	
	
	
	
					 
	</div> 
	
	<?php include('footer.php');  ?>