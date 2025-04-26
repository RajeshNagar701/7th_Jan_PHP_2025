<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];
$email =$data["email"];
$pass =$data["pass"];
$id =$data["id"];

require_once "dbconfig.php";

$query = "UPDATE api_table SET name= '".$name."' , 
                                 email= '".$email."',
								 pass= '".$pass."'  								 
                           WHERE id='".$id."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{	
	echo json_encode(array("message" => "Data Update Successfully", "status" => true));	
}
else
{	
	echo json_encode(array("message" => "Failed Product Not Updated", "status" => false));	
}

?>