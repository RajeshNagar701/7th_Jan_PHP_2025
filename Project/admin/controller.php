
<?php

include_once('../website/model.php');  // step 1 model load


class control extends model{  // step 2 model class extend for model class function use
	
	
	function __construct(){
		
		session_start();
		
		model::__construct();  // step 3 call model __construct for database connectivity
		
		
		$path=$_SERVER['PATH_INFO']; //http://localhost/students/7th_Jan_PHP_2025/Project/website/controller.php
	
		switch($path){
			
			case '/admin-login':
				if(isset($_REQUEST['submit']))
				{
					$email=$_REQUEST['email'];
					$pass=$_REQUEST['password'];
					$password=md5($pass);
					
					$arr=array("email"=>$email,"password"=>$password);
					
					$res=$this->select_where('admin',$arr);
					$chk=$res->num_rows; // check row wise query true or false
					if($chk==1) // 1 means true 
					{
						
							//session create
						$fetch=$res->fetch_object();
						
						$_SESSION['s_aid']=$fetch->id;
						$_SESSION['s_aname']=$fetch->name;
						$_SESSION['s_aemail']=$fetch->email;
						
						if(isset($_REQUEST['rem']))
						{
							setcookie('a_email',$email,time()+(24*3600));
							setcookie('a_pass',$pass,time()+(24*3600));
						}
						
						echo "<script>
							alert('Login Success');
							window.location='dashboard';
						</script>";
					}
					else
					{
						echo "<script>
							alert('Login Failed Due to wrong credancial');
						</script>";
					}
				}
				include_once('index.php');
			break;
			
			case '/admin_logout':
				
				// session _delete
				
				unset($_SESSION['s_aid']);
				unset($_SESSION['s_aname']);
				unset($_SESSION['s_aemail']);
				
				echo "<script>
					alert('Logout Success');
					window.location='admin-login';
				</script>";
			break;
			
			
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			
			case '/add_categories':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					//image 
					$image=$_FILES['image']['name'];
					$path='../website/upload/categories/'.$image;
					$temp_image=$_FILES['image']['tmp_name'];
					move_uploaded_file($temp_image,$path);
					
					$arr=array("name"=>$name,"image"=>$image);
					
					$res=$this->insert('categories',$arr);
					if($res)
					{
						echo "<script>
							alert('categories inserted Success');
						</script>";
					}
				}
				include_once('add_categories.php');
			break;
			
			case '/manage_categories':
				$cat_arr=$this->select('categories');
				include_once('manage_categories.php');
			break;
			
			case '/add_products':
				$categories_arr=$this->select('categories');
				if(isset($_REQUEST['submit']))
				{
					$cate_id=$_REQUEST['cate_id'];
					$name=$_REQUEST['name'];
					$description=$_REQUEST['description'];
					$price=$_REQUEST['price'];
					//image 
					$image=$_FILES['image']['name'];
					$path='../website/upload/product/'.$image;
					$temp_image=$_FILES['image']['tmp_name'];
					move_uploaded_file($temp_image,$path);
					
					$arr=array("cate_id"=>$cate_id,"name"=>$name,"description"=>$description,
					"price"=>$price,"image"=>$image);
					
					$res=$this->insert('product',$arr);
					if($res)
					{
						echo "<script>
							alert('product inserted Success');
						</script>";
					}
				}
				include_once('add_products.php');
			break;
			
			case '/manage_products':
				$product_arr=$this->select('product');
				include_once('manage_products.php');
			break;
			
			
			case '/edit_products':
				$categories_arr=$this->select('categories');
				if(isset($_REQUEST['edit_products']))
				{
					$id=$_REQUEST['edit_products'];
					$where=array("id"=>$id);
					$run=$this->select_where('product',$where);
					$fetch=$run->fetch_object();
					
					$del_img=$fetch->image;
					
					if(isset($_REQUEST['save']))
					{
						$cate_id=$_REQUEST['cate_id'];
						$name=$_REQUEST['name'];
						$description=$_REQUEST['description'];
						$price=$_REQUEST['price'];
						//image 
						if($_FILES['image']['size']>0)
						{
							$image=$_FILES['image']['name'];
							$path='../website/upload/product/'.$image;
							$temp_image=$_FILES['image']['tmp_name'];
							move_uploaded_file($temp_image,$path);
						
							$arr=array("cate_id"=>$cate_id,"name"=>$name,"description"=>$description,
							"price"=>$price,"image"=>$image);
							
							$res=$this->update('product',$arr,$where);
							if($res)
							{
								unlink('../website/upload/product/'.$del_img);
								echo "<script>
									alert('Updated Success');
									window.location='manage_products';
								</script>";
							}
						}
						else
						{
							$arr=array("cate_id"=>$cate_id,"name"=>$name,"description"=>$description,
							"price"=>$price);
							
							$res=$this->update('product',$arr,$where);
							if($res)
							{
								echo "<script>
									alert('Updated Success');
									window.location='manage_products';
								</script>";
							}
						}
					}
				}
				include_once('edit_products.php');
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
			
			case '/delete':
			
			if(isset($_REQUEST['del_contact']))
			{
				$id=$_REQUEST['del_contact'];
				$where=array("id"=>$id);
				$run=$this->delete('contact',$where);
				if($run)
				{
					echo "<script>
							alert('Contact deleted Success');
							window.location='manage_contacts';
						</script>";
				}
			}
			
			if(isset($_REQUEST['del_categorie']))
			{
				$id=$_REQUEST['del_categorie'];
				$where=array("id"=>$id);
				
				// get image data for delete 
				$res=$this->select_where('categories',$where);
				$fetch=$res->fetch_object();
				$image=$fetch->image;
				
				$run=$this->delete('categories',$where);
				if($run)
				{
					unlink('../website/upload/categories/'.$image);
					echo "<script>
							alert('Categories deleted Success');
							window.location='manage_categories';
						</script>";
				}
			}
			
			if(isset($_REQUEST['del_customer']))
			{
				$id=$_REQUEST['del_customer'];
				$where=array("id"=>$id);
				
				
				// get image data for delete 
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				$image=$fetch->image;
				
				$run=$this->delete('customer',$where);
				if($run)
				{
					unlink('../website/upload/customer/'.$image);
					echo "<script>
							alert('customer deleted Success');
							window.location='manage_customers';
						</script>";
				}
			}
			
			if(isset($_REQUEST['del_product']))
			{
				$id=$_REQUEST['del_product'];
				$where=array("id"=>$id);
				
				// get image data for delete 
				$res=$this->select_where('product',$where);
				$fetch=$res->fetch_object();
				$image=$fetch->image;
				
				$run=$this->delete('product',$where);
				if($run)
				{
					unlink('../website/upload/product/'.$image);
					echo "<script>
							alert('Product deleted Success');
							window.location='manage_products';
						</script>";
				}
			}
			
			break;
			
		}
		
	}

}
$obj=new control;
?>