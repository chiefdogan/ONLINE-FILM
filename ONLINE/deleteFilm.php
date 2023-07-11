<?php

include'config.php';

$id = $_GET['film_id'];

$sql = "delete from film where film_id = '$id'";

$result = mysqli_query($con,$sql);

if($sql)
{

    echo  "<script>
    	   alert('Are you sure you want to delete this record..???');  
    	   window.location.href='messagedelete.php';
    	   </script>";       

}

else{
	
     echo  "<script>
    	   alert('Access Denied Something went wrong!!!');  
    	   window.location.href='admin.php';
    	   </script>";       
}

?>
