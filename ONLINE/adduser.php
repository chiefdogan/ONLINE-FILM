<?php

//just calling the connection file here
include('config.php');

//getting data from the html code above
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$type = $_POST['type'];


//encryipt password using sha1()
$password =sha1($password);


// query for inserting data into database
 $sql = "insert into users (username, password, email,usertype) values('$username', '$password', '$email','$type')";
 $result = mysqli_query($con,$sql);
    if ($result) {
             echo  "<script>
    	   alert('User Account Created Successfuly please login to continue!!!');  
    	   window.location.href='login.php';
    	   </script>";          
}
  else {
  echo  "<script>
    	   alert('Opps Something Went Wrong username or email is Arleady Taken!!!');  
    	   window.location.href='register.php';
    	   </script>";       

} 

?>

