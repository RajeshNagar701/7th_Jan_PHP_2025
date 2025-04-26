<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");


$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];

require_once "dbconfig.php";

$query = "SELECT * FROM api_table WHERE name LIKE '".$name."%' ";

$result = mysqli_query($conn, $query) or die("Search Query Failed.");

$count = mysqli_num_rows($result);

if($count > 0)
{	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($output);
}
else
{	
	
	echo json_encode(array("message" => "No Data Found.", "status" => false));
}

?>