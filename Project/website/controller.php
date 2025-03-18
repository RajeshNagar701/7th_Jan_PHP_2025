
<?php

include_once('model.php');  // step 1 model load


class control extends model{  // step 2 model class extend for model class function use
	
	
	function __construct(){
		
		model::__construct();  // step 3 call model __construct for database connectivity
		
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/7th_Jan_PHP_2025/Project/website/controller.php
	
		switch($path){
			
			case '/':
				include_once('index.php');
			break;
			
			case '/index':
				include_once('index.php');
			break;
			
			case '/signup':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']); // md5 encrypt
					$gender=$_REQUEST['gender'];
					
					$hobby_arr=$_REQUEST['hobby'];
					$hobby=implode(',',$hobby_arr); // arr to string
					
					//image 
					$image=$_FILES['image']['name'];
					$path='upload/customer/'.$image;
					$temp_image=$_FILES['image']['tmp_name'];
					move_uploaded_file($temp_image,$path);
					
					$arr=array("name"=>$name,"email"=>$email,"password"=>$password,"gender"=>$gender,
					"hobby"=>$hobby,"image"=>$image);
					
					$res=$this->insert('customer',$arr);
					if($res)
					{
						echo "<script>
							alert('Signup Success');
						</script>";
					}
				}
				include_once('signup.php');
			break;
			
			case '/login':
				include_once('login.php');
			break;
			
			case '/about':
				include_once('about.php');
			break;
			
			case '/product':
				$cat_arr=$this->select('categories');
				include_once('product.php');
			break;
			
			case '/service':
				include_once('service.php');
			break;
			
			case '/gallery':
				include_once('gallery.php');
			break;
			
			case '/contact':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$comment=$_REQUEST['comment'];
					
					$arr=array("name"=>$name,"email"=>$email,"comment"=>$comment);
					
					$res=$this->insert('contact',$arr);
					if($res)
					{
						echo "<script>
							alert('Inquiry Submitted Success');
						</script>";
					}
				}
				include_once('contact.php');
			break;
			
			
		}
		
	}

}
$obj=new control;
?>