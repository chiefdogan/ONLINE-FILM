<?php
//just calling the connection file here
include('config.php');

//getting data from the html code above
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$type = $_POST['type'];


//encryiption of  password using sha1()
$password =sha1($password);

//remove unexpected extra white space 
$username = trim($username);

//create session variables
$_SESSION['user_id'] = $email;

//validate email as client validation is weak
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 $_SESSION['msg']= "Invalid E-mail format";
 header("Location:register.php");
exit;
}

//escape any special character
$username = addslashes($username);

// query for inserting data into database
 $sql = "insert into users (username, password, email,usertype) values('$username', '$password', '$email','$type')";
 $result = mysqli_query($con,$sql);
    if ($result) {
             echo  "<script>
    	   alert('User Account Created Successfuly!!!');  
    	   window.location.href='login.php';
    	   </script>";          
}
  else {
  echo  "<script>
    	   alert('Account not Created Successfuly!!!');  
    	   window.location.href='register.php';
    	   </script>";       

} 
?>
