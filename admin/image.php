<?php 
    include('header.php'); 
	
	if(!isset($_GET['pid']))
	{
		echo"<script> window.location('product.php') </script>";
	}
 $pro=$obj->getSingleProduct($_GET['pid']);
 
	 if(mysqli_num_rows($pro)<=0)
	 {
		 echo"<script> 
		  alert('هذا المنتج غير موجود ')
		  window.location('product.php')
		  </script>";
		 
	 }
	$productName;
 
	 foreach($pro as $p)
	 {
		 $productName=$p['product_name'];
	 }

?>

  <div class="row">
  
  <div class="col-sm-6 col-sm-offset-2">
  
	<h2>إضافة صورة لــــــ :- <?php echo$productName;?>  </h2>
	
		<form action="" method="post"  enctype="multipart/form-data">
		<table class="table">
		<tr>
		<td>اختيار صورة المنتج</td>
		<td> <input type="file" name="img_name" class="form-control" required > </td>
		</tr>
		
		
		<td></td> 
		<td> <input type="submit" name="upload" value="رفع"  class="btn btn-success"></dt>
		</tr>
		</table>
		</form>
	</div>
	
	<!--upload image for product-->
	<?php 
	
	if(isset($_POST['upload']))
		
	{
		
		
		$img=$_FILES['img_name']['name'];
		 move_uploaded_file($_FILES["img_name"]["tmp_name"],"images/".$img)or die("غلط في تحميل الصورة");
		if($obj->addImages($img,$_GET['pid']))
		{
		echo"<script> alert('تم حفظ الصورة');</script>";
		}
		else
		{
			echo"<script> alert('لم يتم حفظ الصورة');</script>";
		}
		
		
		
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
	  <div class="col-sm-8 col-sm-offset-2">
	  
		<h2> كل صور المنتح :- <?php echo$productName;?></h2>
		

		
		<table class="display" id="mytable">
		<thead>
		<tr>
		<th> الرقم</th> 
		<th>الصورة </th>

		<th>الحدث </th>
		</tr>
		</thead>
		<tbody>
			<?php 
			   $t=1;
				$img=$obj->getImage($_GET['pid']);
				foreach($img as $i )
				{
				echo"<tr>";
				echo"<td>".$t."</td>";
				echo"<td><img src='images/".$i['img_name']."' class='img' width='200' /></td>";
			
				echo"<td ><!--<a href='image.php?pid=".$p['product_id']."' class='btn btn-success'> الصورة</a>--></td>";								
				echo"</tr>";
				$t++;
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

  
