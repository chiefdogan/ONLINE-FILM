<?php

//just calling the connection file here
include('config.php');

//getting data from the html code above
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$type = $_POST['type'];


//encryipt password using sha1() or md5() 
$password =sha1($password);


// query for inserting data into database
 $sql = "insert into users (username, password, email,usertype) values('$username', '$password', '$email','$type')";
 $result = mysqli_query($con,$sql);
    if ($result) {
    	   echo  "<script>
    	   alert('Record Created Successfuly!!!');  
    	   window.location.href='admin.php';
    	   </script>";       
}
  else {
 echo  "<script>
    	   alert('Record not  Created Successfuly!!!');  
    	   window.location.href='regEmployee.php';
    	   </script>";    
} 

?>

