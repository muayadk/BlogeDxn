
<!DOCTYPE HTML>
<html>
<head>
<title>Animus A Blogging Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" media="all">

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Graphic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
		$(document).ready(function () {
		    size_li = $("#myList li").size();
		    x=3;
		    $('#myList li:lt('+x+')').show();
		    $('#loadMore').click(function () {
		        x= (x+1 <= size_li) ? x+1 : size_li;
		        $('#myList li:lt('+x+')').show();
		    });
		    $('#showLess').click(function () {
		        x=(x-1<0) ? 1 : x-1;
		        $('#myList li').not(':lt('+x+')').hide();
		    });
		});
	</script>

</head>
<body>
<!-- header -->
<?php 
	include('admin/mywork/work.php');
	$obj =new works();
	
?>	

<div class="banner">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
			</div>
			<div class="header-right">
				<ul>
					<li><a href="#"><i class="fb"> </i></a></li>
					<li><a href="#"><i class="twt"> </i></a></li>
					<li><a href="mailto:m@gmail.com"><i class="mail"> Gmail</i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=770376355"><i><img src="images/wt.png" /> </i></a></li>
					
				<li>
				<div class="search2">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
						<input type="submit" value="">
					</form>
				</div></li>
					<div class="clearfix"></div>
				</ul>
					
			</div>
				<div class="clearfix"> </div>
			</div>
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
						<li class="active"><a href="index.php">الرئيسية</a></li>
						
						<li>
                                       
             
									<div class="">
									  <ul class="list-unstyled list-inline">
										<li class="dropdown dropdown-big">
											<a data-toggle="dropdown" data-hover="الاصناف الرئيسية" class="dropdown-toggle" href="#">الاصناف الرئيسية </a>
										
											<ul class="dropdown-menu">
											<li><a href="allproduct.php" data-hover="كل المنتجات">كل المنتجات</a></li>
											<?php 
											$cat=$obj->getAllCategory();
											foreach($cat as $c ) 
											{
											
											
											echo"<li> <a href='productcategory.php?id=".$c['cat_id']."' data-hover='".$c['cat_name']."'>".$c['cat_name']." </a></li>";
											} 
											?>
											
										  </ul>
										  
										  
										</li>
										</ul>
										</div>
										
								
							</li>
						
							
							
							
				
							<li><a href="about.php" data-hover="من نحن؟">من نحن؟</a></li>
							<li><a href="photos.php" data-hover="الصور">الصور</a></li>
							
							<li><a href="contact.html" data-hover="تواصل معنا">تواصل معنا</a></li>
								<div class="clearfix"> </div>
						</ul>
				</div>

						<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 					 
	</div> 
</div>
<!-- header -->