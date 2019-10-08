
<?php include('header.php'); ?>

  <div class="row">
  
  <div class="col-sm-4 col-sm-offset-4">
  
	<h2> ادارة المنشورات </h2>
	<h3>!<?php echo ucfirst($_SESSION['user']); ?> </h3>
		<form action="" method="post" enctype="multipart/form-data">
		<table class="table">
		<tr>
		<td>العنوان :</td>
		<td> <input type="text" name="post_title" class="form-control" required /> </td>
		</tr>
		
		<tr>
		<td>التاج الرئيسي</td>
		<td> <input type="text" name="post_tage" class="form-control" required /> </td>
		</tr>
		
		<tr>
		<td>الصورة :</td>
		<td> <input type="file" name="img" class="form-control" required /> </td>
		</tr>
		
		<tr>
		<td>المحتوى :</td>
		<td> <textarea type="text" name="post_content" class="form-control" required />  </textarea></td>
		</tr>
		
		
	
	
		
		<tr> 
		<td></td> 
		<td> <input type="submit" name="addpost" value="حفظ"  class="btn btn-success"></dt>
		</tr>
		</table>
		</form>
	</div>
	
	
	<?php 
	if(isset($_POST['addpost']))
	{
		
		$a=$_POST['post_title'];
		$b=$_POST['post_tage'];
		
		$img=$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'],"images/".$img)or die("غلط في تحميل الصورة");
		 
		$d=$_POST['post_content'];
		$e=$_SESSION['user'];	
		$obj->addPost($a,$b,$img,$d,$e);
		echo"<script> alert('تم حفظ المنشور باسم $a') </script>";
		
		
	}
	
	?>
	
	

	
  </div><!--row-->
  
  
		<link rel="stylesheet" type="text/css" href="css/DataTable.css">
		<script src="js/jq.js"></script>
		<script src="js/DataTable.js"></script>
		
		<script language="javascript">
				$(document).ready(function() {
					$("#mytable").DataTable();
				} );
		
		</script>
		
  
  
	<div class="row">
	  <div class="col-sm-10 col-sm-offset-1">
	  
		<h2> ألمنشورات  </h2>
		

		
		<table class="display" id="mytable">
		<thead>
		<tr>
		<th> الرقم</th> 
		<th>العنوان</th>
		<th>التاج</th>
		<th>التفاصيل </th>
		<th>المستخدم </th>
	
		<th>الصورة </th>
		</tr>
		</thead>
		<tbody>
			<?php 
				$post=$obj->getAllPOst();
				foreach($post as $p )
				{
				echo"<tr>";
				echo"<td>".$p['post_id']."</td>";
				echo"<td>".$p['post_title']."</td>";
			    echo"<td>".$p['post_tage']."</td>";
				echo"<td>".$p['post_content']."</td>";	
				echo"<td>".$p['user_name']."</td>";	
				echo"<td ><img src='images/".$p['img']."' class='img' width='200' /></td>";	
			
								
				echo"</tr>";
				}
					
			?>
			</tbody>
			
			</table>
	</div>
		</div><!--row-->
	
	
	
	
	
	<!--footer-->
	

<hr/>
  <div class="model-footer pull-left">
  <p> &copy; حقوق الطبع محفوظة </p>
  <p>مطور الموقع م/مؤيد اسماعيل</p>
  </div><!--end footer-->
  
  
  </div><!--container-->

  
