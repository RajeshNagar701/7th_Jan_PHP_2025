<?php
date_default_timezone_set('asia/calcutta');

// time() print unix time-stamp 1, jan 1970
echo time()."<br>";

$day=time()+(2*24*60*60);
$hour=time()+(2*60*60);

echo date('d/m/y',$day)."<br>";
echo date('h:i:s A',$hour)."<br>";
?>