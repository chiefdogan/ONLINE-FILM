<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db ="filmdb" ;

$con=mysqli_connect($host,$username,$password,$db);
if(!$con){
	echo "Error on creating the database".msqli_error($con);
}
else
{
    	
    	
}

