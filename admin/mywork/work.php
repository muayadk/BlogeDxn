<?php 
 class works
{
	//connection
	public function con()
	{
		$con=mysqli_connect("localhost","root","","myshop") or die("error connection");
		return $con;
	}
	
	// function login in to admin panal
	public function login($a,$b)
	{
		$b=md5($b);
		$q=mysqli_query($this->con()," 
		select * from user WHERE user_name='$a'and password='$b';
		 ") or die("error login");
		 
		 $i=mysqli_num_rows($q);
		 return $i;
	}
	
	// دالة تاتمين من الاختراق 
	function check($n)
	{
		return mysqli_real_escape_string($this->con(),$n);
	}
		
	
	
	//دالة اضافة صنف
	
	function addcategory($a)
	{
		$a=$this->check($a);
		$q=mysqli_query($this->con(), 
		"insert into category (cat_name) values('$a')") 
		or die("error insert in to category");
		
	}
	
	
	// دالة غرض الاصناف 
		function getAllCategory ()
		{
			$q=mysqli_query($this->con() , "select * from category") or die("error retrive category");
			
			return $q;
		}
		
		
		//  دالة ادخال المنتجات
		
		function addproduct($a,$b,$c,$d,$e)
		{
			$a=$this->check($a);
		    $b=$this->check($b);
			$c=$this->check($c);
			$d=$this->check($d);
			$e=$this->check($e);
			
	$q=mysqli_query($this->con(), 
	"insert into product (product_name,product_price,product_details,product_tags,cat_id) values('$a','$b','$c','$d','$e')") or die("Error inserting to table product");
			
			
		}
		
	//  من الفيو دالة لاسترجاع المنتجات	
	public function getAllProduct()	
	{
		$q=mysqli_query($this->con() , "select * from vproduct") or die("error retrive from product");
			
			return $q;
	}
	
	// دالة لاستراجع  منتج واحد لغرض اضافة الصورة للمنتج
	public function getSingleProduct($id)	
	{
		$id=$this->check($id);
		$q=mysqli_query($this->con() , "select * from vproduct where product_id='$id'") or die("error retrive from  single product");
			
			return $q;
	}
	
	
		public function getAllProductView()	
	{
		$q=mysqli_query($this->con() , "select * from vproductimg ") or die("error retrive from product");
			
			return $q;
	}

	
       // دالة اضافة صورة للمنتج
		function addImages($img,$pid)
		{
			$img=$this->check($img);
			$pid=$this->check($pid);
			$q=mysqli_query($this->con() ,
			"INSERT INTO `img`(`img_name`,`product_id`) VALUES ('$img','$pid')" ) or die("error add images");
			return $q;
		}
	
	// دالة لاستعراض  الصورة  
	  function getImage($id)
	  {
		  $id=$this->check($id);
		  $q=mysqli_query($this->con(),"select * from img where product_id='$id'") or die("error retrive image product");
		  
		  return $q;
	  }
	  
	  
	  	
	// دالة لاستعراض كل الصور
	  function getAllImages()
	  {
		 
		  $q=mysqli_query($this->con(),"select * from img ") or die("Error Retrive  All Image ");
		  
		  return $q;
	  }
	  
	  
	  // اضافة منشور
	  function addPost($a,$b,$c,$d,$e)
	  {
		  $a=$this->check($a);
		    $b=$this->check($b);
			$c=$this->check($c);
			$d=$this->check($d);
			$e=$this->check($e);
			
			$q=mysqli_query($this->con(), 
			"insert into post (post_title,post_tage,img,post_content,user_name) values('$a','$b','$c','$d','$e')") or die("Error inserting to table post");
			
			
		  
	  }
	  
	  
	 function getAllPOst()
	 {
		 $q=mysqli_query($this->con() , "select * from post") or die("error retrive from post");
			
			return $q;
	 }
	 
	 
	function postDetails($id)
	 {
		  $q=mysqli_query($this->con() , "select * from post where post_id='$id'") or die("error retrive details post from post");
			
			return $q;
	 }
	
	
	
	
	
	
   }  // نهاية الكلاس 

?>