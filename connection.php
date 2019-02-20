
<?php 
if (session_id()=="")
{
	session_start();
}

$connection = new mysqli("localhost","root","", "pcdond-sms");
//persistentmethod //$connection = new mysqli("p:localhost","root","", "pcdond");

// $res = $connection ->close();








?>
