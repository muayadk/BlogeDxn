<?php include('header.php'); ?>
<!-- header -->
	<div class="details">
		<div class="container">
		<?php
         		$id=$_GET['post_id']; 
				$d=$obj->postDetails($id);
				
				foreach($d as $p )
				{
		?>
			<div class="det_pic">
				  <!--<img src="images/img18.jpg" class="img-responsive" alt="">-->
				  <?php echo"<img src='admin/images/".$p['img']."'  class='img-responsive' alt=''  />";?>
			</div>
			<div class="det_text">
				<p><?php echo$p['post_content']; ?></p>
			</div>
			
				<?php } ?>
			<ul class="links">
				  		 <li><i class="date"> </i><span class="icon_text">July 14, 2014</span></li>
				  		 <li><a href="#"><i class="admin"> </i><span class="icon_text">Admin</span></a></li>
				  		 <li class="last"><a href="#"><i class="permalink"> </i><span class="icon_text">Permalink</span></a></li>
				    </ul>
					<ul class="links_middle">
			  		     <li><a href="#"><i class="title-icon"> </i><span class="icon_text">Lorem Ipsum Dolore</span></a></li>
				  		 <li><i class="tags"> </i><span class="icon_text">No tags</span></li>
		  		    </ul>
					<ul class="links_bottom">
		  		    	<li><a href="#"><i class="comments"> </i><span class="icon_text">5 Comments</span></a></li>
			  			<li><i class="views"> </i><span class="icon_text">49</span></li>
			  			<li><i class="likes"> </i><span class="icon_text">12</span></li>
		  		    </ul>
			 <div class="comments1">
								<h4>COMMENTS</h4>
			  				<div class="comments-main">
									<div class="col-md-2 cmts-main-left">
										<img src="images/avatar.png" alt="">
									</div>
									<div class="col-md-10 cmts-main-right">
										<h5>TOM BROWN</h5>
										<p>Vivamus congue turpis in augue pellentesque scelerisque. Pellentesque aliquam laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper purus sit amet lorem elementum faucibus.</p>
										<div class="cmts">
											<div class="cmnts-left">
												<p>On April 14, 2014, 18:01</p>
											</div>
											<div class="cmnts-right">
												<a href="#">Reply</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
			  				</div>
			<div class="lev">
			<div class="leave">
				<h4>Leave a comment</h4>
				</div>
				<form id="commentform">
				    <label for="author">Name</label>
						<input id="author" name="author" type="text" value="" size="30" aria-required="true">
						<label for="email">Email</label>
						<input id="email" name="email" type="text" value="" size="30" aria-required="true">
						<label for="url">Website</label>
						<input id="url" name="url" type="text" value="" size="30">
						<label for="comment">Comment</label>
						<textarea></textarea>
					 <div class="clearfix"></div>
			           <input name="submit" type="submit" id="submit" value="Send">
					<div class="clearfix"></div>
				   </form>
				  </div>
				  
		</div>
	</div>
	
<?php include('footer.php'); ?>