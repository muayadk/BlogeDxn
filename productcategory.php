<?php include('header.php'); ?>

<!-- content -->
<div class="content">
	<div class="container">
	 <div class="load_more">	
			     <ul id="myList">
			        <!-- These are our grid blocks -->
					
			        <li>
					
						<div class="l_g">
						
						<?php 
						     if(isset($_GET['id']))
							  {
							 $id=$_GET['id'];
						
							$pro=mysqli_query($obj->con(),"SELECT * FROM vproductimg WHERE cat_id ='$id'") or die("errorrrrrrrrrrrr");
						    
						       foreach($pro as $p )
							   { 
							   ?>
							 <div class="col-md-3 praesent">
								<div class="l_g_r">
									<div class="dapibus">
									
										<a href="postdetails.php?pid=<?php echo $p['product_id']; ?>">
										<?php echo"<img src='admin/images/".$p['img_name']."' class='img-responsive' alt=''  />";?>
										</a>
										<div class="det_text">
										<h2 style="text-align:center;"><?php echo$p['product_name']; ?>  <a href="singleproduct.php?pid=<?php echo $p['product_id']; ?>"></a></h2>
											<p style="text-align:center;"><?php echo$p['product_price'];?>  </p>
										<p style="text-align:center;"><?php echo$p['product_tags']; ?> </p>
										<a href="signleproduct.php?pid=<?php echo $p['product_id']; ?>" class="link">مزيد من التفاصيل</a>
								         </div>
									</div>
								</div>
							</div>
							  <?php }  }?>
						</div>
					   </li>
					   </ul>
					   
			</div>
			</div>
		</div>
		
<?php include('footer.php'); ?>