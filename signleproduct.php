<?php include('header.php'); ?>
<!-- header -->
	<div class="details">
		<div class="container">
		<?php
         		$id=$_GET['pid']; 
				$d=mysqli_query($obj->con() , "select * from vproductimg where product_id='$id'") or die("error retrive from  single product");
				
				foreach($d as $p )
				{
		?>
			<div class="det_pic">
				  <!--<img src="images/img18.jpg" class="img-responsive" alt="">-->
				  <?php echo"<img src='admin/images/".$p['img_name']."' width='600' heigth='300'  class='img-responsive' alt=''  />";?>
			</div>
			<div class="det_text">
				<p><?php echo$p['product_name']; ?></p>
				<p><?php echo$p['product_details']; ?></p>
			</div>
			
				<?php } ?>
			
				  
		</div>
	</div>
	
<?php include('footer.php'); ?>