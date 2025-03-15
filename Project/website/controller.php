
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
				include_once('contact.php');
			break;
			
			
		}
		
	}

}
$obj=new control;
?>