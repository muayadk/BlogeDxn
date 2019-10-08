<?php include('header.php'); ?>

<!-- content -->
<div class="content">
	<div class="container">
	 <div class="load_more">	
	 
	 <div class="row">
	     <div class="col-md-12">
			    
					
					
						
						<?php 
						       // عرض المنشورات
						      $post=$obj->getAllPOst();
						       foreach($post as $p )
							   { ?>
							 <div class="col-md-3 praesent">
								<div class="l_g_r">
									<div class="dapibus">
										<h2><?php echo$p['post_title']; ?></h2>
										<p class="adm">الكاتب <a href="user.php"> <?php echo$p['user_name'];?> </a> <?php echo$p['post_date']; ?>
										 </p>
										<a href="postdetails.php?post_id=<?php echo $p['post_id']; ?>">
										<?php echo"<img src='admin/images/".$p['img']."' class='img-responsive' alt=''  />";?>
										</a>
										<p><?php echo$p['post_tage']; ?> </p>
										<a href="postdetails.php?post_id=<?php echo $p['post_id']; ?>" class="link">مزيد من التفاصيل</a>
								
									</div>
								</div>
							</div>
					   <?php } ?>
						
               </div>
			   
					</div>	
							
										
					  
				  <div id="loadMore">Load more</div>
	<div id="showLess">Show less</div>

			    </div>
	</div>
</div>
<!--content -->


<?php include('footer.php'); ?>
	