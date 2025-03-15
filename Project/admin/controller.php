
<?php

include_once('../website/model.php');  // step 1 model load


class control extends model{  // step 2 model class extend for model class function use
	
	
	function __construct(){
		
		model::__construct();  // step 3 call model __construct for database connectivity
		
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/7th_Jan_PHP_2025/Project/website/controller.php
	
		switch($path){
			
			case '/admin-login':
				include_once('index.php');
			break;
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			
			case '/add_categories':
				include_once('add_categories.php');
			break;
			
			case '/manage_categories':
				$cat_arr=$this->select('categories');
				include_once('manage_categories.php');
			break;
			
			case '/add_products':
			
				include_once('add_products.php');
			break;
			
			case '/manage_products':
				$product_arr=$this->select('product');
				include_once('manage_products.php');
			break;
			
			case '/manage_cart':
				include_once('manage_cart.php');
			break;
			
			case '/manage_order':
				include_once('manage_order.php');
			break;
			
			case '/manage_contacts':
				$contact_arr=$this->select('contact');
				include_once('manage_contacts.php');
			break;
			
			case '/manage_feedback':
				include_once('manage_feedback.php');
			break;
			
			case '/add_employees':
				include_once('add_employees.php');
			break;
			
			case '/manage_employees':
				include_once('manage_employees.php');
			break;
			
			case '/manage_customers':
				$customer_arr=$this->select('customer');
				include_once('manage_customers.php');
			break;
			
			
		}
		
	}

}
$obj=new control;
?>