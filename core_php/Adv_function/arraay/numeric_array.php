<?php

/*
// array is collection values


$a="raj";
$b="akash";
$c="mahesh";

$names=array("Raj","akash","mahesh");   // array("0"=>"Raj","1"=>"akash","2"=>"Mahesh");
print_r($names)       // output : array("0"=>"Raj","1"=>"akash","2"=>"Mahesh");
echo $names[1];       // output : akash

collections of values

$nemeric=array("a","b","c","d","e");  index auto generate 0
echo $nemeric[1];    

$associate=array("raj"=>"a","2"=>"b","3"=>"c");  // associate
echo $associate[raj];

$multidemetional=array("a","b"=>array("p","q"),"c");  // multidemetional
echo $multidemetional[b][1];   

*/

$name="a";
$name1="b";
$name2="c";

$arr=array("a","b","c","d","e","f","g","h","i");  
print_r($arr); // array("0"=>"a","1"=>"b","2"=>"c");

echo "</br>";

echo $arr[5] . "</br>";

for($i=0;$i<count($arr);$i++)
{
	echo $arr[$i];
}

echo "</br>";

foreach($arr as $d)
{
	echo $d ;
}



?>