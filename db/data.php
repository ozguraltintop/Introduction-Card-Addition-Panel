<?php 

try{
	$db= new PDO("mysql:host=localhost;dbname=ref","root","root");
}
catch(PDOException $e)
{
	echo $e->getMessage();
	
}
?>