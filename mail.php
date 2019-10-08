<?php
  include('header.php');
if(isset($_POST["submit"])) {
	
	            
				$to = "moayadabdo0@gmail.com";
				
				$subject = 'BlogeDxn Message';
				
				$headers = "MIME-Version: 1.0" . "\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\n";
				$headers .="From: DxnBloge <no-reply@domain.com>\r\n";
				
				$body ="<!DOCTYPE html>
						<html dir = 'ltr'>
						<head>
						<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
						
						</head>
						<body>
					
							<div class=''>
							<h2>Name</h2>". $_POST['name']."<br/>
							<h2>Mobile:</h2> ". $_POST['tel']."<br/>
							<h2>Email</h2><br/>". $_POST['email']."<br/>
					
							<h2>Message</h2><br/>".$_POST['message']."			   
							</div>
						</body>
						</html>";
               
			  if(mail($to, $subject, $body, $headers))
			  {
				    $message ='<h3 style="color:green">تم ارسال الرسالة بنجاح'.'</h3>'; 
			  } 
	          else
			  {
		            $message = '<h3 style="color:red">خطا في ارسال الرسالة'.'</h3>'; 
			  }
	
  }
?>

	<center class="alert-info">
	<?php 
		if(isset($message))
		{
			echo $message;
		}
		
		?>	
	</center>
	
<div class="lev" style="margin-right:50px; padding-right:50px;">
			<div class="leave">
				<h4>تواصل معنا</h4>
				</div>
				<form id="commentform" action="" method="post" enctype="multipart/form-data">
				    <label for="author">الاسم </label>
						<input id="name" name="name" type="text" value=""  placholder="Name" size="30" aria-required="true">
						<label for="email"> البريد الالكتروني </label>
						<input id="email" name="email" type="text" value="" placholder="E-mail" size="30" aria-required="true">
						<label for="url">رقم الموبيل </label>
						<input id="url" name="tel" type="text" value="" size="30">
						<label for="url">البلاد</label>
						<input id="url" name="country" type="text" value="" size="30">
						<label for="comment"> الرسالة</label>
						<textarea name="message" ></textarea>
					 <div class="clearfix"></div>
			           <input name="submit" type="submit" id="submit" value="ارسال">
				
				   </form>
				  </div>
			</div>
		
<?php include('footer.php'); ?>
