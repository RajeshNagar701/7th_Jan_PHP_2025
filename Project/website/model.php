

<?php

class model {
	
	public $conn="";
	function __construct(){
		$this->conn=new Mysqli('localhost','root','','jan7th');// hostname , username,pass ,db name
	}
		
	function select($tbl){
		
		$sel="select * from $tbl";    // query
		$run=$this->conn->query($sel); // query run of database
		while($fetch=$run->fetch_object())   // fetch all result data from $run 
		{
			$arr[]=$fetch; // all data store in arr
		}
		return $arr;
	}
	
	function select_where(){
		
		
	}
	
	function insert(){
		
	}
	function delete(){
		
	}
	
	function update(){
		
	}
	
	
}

$obj=new model;

?>