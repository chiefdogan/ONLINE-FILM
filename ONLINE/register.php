<!DOCTYPE html>
<html lang="en">
<?php 
include('config.php'); 

//getting data from the html code above
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$type = $_POST['type'];

//encryipt password using sha1()
$password =sha1($password);

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

$sql = "insert into users (username, password, email,usertype) values('$username', '$password', '$email','$type')";
 $result = mysqli_query($con,$sql);
 if ($result) {
             echo  "<script>
           alert('User Account Created Successfuly please login to continue!!!');  
           window.location.href='login.php';
           </script>";          
}

 elseif (!$result){
  echo  "<script>
           alert('Opps Something Went Wrong username or email is Arleady Taken!!!');  
           window.location.href='register.php';
           </script>";       

} 

 // echo("$email is a valid email address");
}
 elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Invalid E-mail format";
}

?>

<head>
    <title>User Registration </title>
</head>
<body>
    <table width="20%" align="center" border="0">
        <form  method="post" action="">
            <th colspan="2"><h1 align="center">ONLINE MOVIE</h1>
    <h3 align="center">User Registration</h3></th>
        <tr>
            <td>Username :</td> 
            <td> <input type="text" name="username"  placeholder=" Enter username" required=""></td>
        </tr>

        <tr>
            <td> password :</td> 
            <td><input type="password" name="password"  placeholder="Enter password" required=""></td>
        </tr>

        <tr hidden=""> 
            <td>Usertype :</td> 
            <td>
                <select name="type" required>
                <option disabled="">--Usertype--</option>
                <option value="Admin" disabled="" hidden="" > Admin</option>
                <option value="Employee" disabled="" hidden=""> Employee</option>
                <option value="Client" selected > Client</option>
                </select> </td>
        </tr>

        <tr>
            <td>Email : </td> 
            <td><input type="text" name="email"  placeholder="Enter email" required="" ><?php echo $emailErr; ?> </td>
        </tr>

        <tr>
            <td colspan="2" align="center"><br>
                 <input type="submit" name="Register" value="Register">
                 <input type="reset" name="Register" value="Reset">
            <br><br>
        already have an account?<a href="login.php">&nbsp Login</a></td>

        </tr>

 </table>
</form>   
</body>
</html>

