<?php
include("config.php");

$username = $_POST['username'];
$pass = $_POST['password'];
	
$username=trim($username);
$pass=trim($pass);

$pass=sha1($pass);



$sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";

if(!$result = mysqli_query($con, $sql))

{

echo mysqli_error($con);

exit();

}


$num=mysqli_num_rows($result);

if ($num>0) {

$row = mysqli_fetch_assoc($result);

if ($row['username'] == $username && $row['password'] == $pass) {

//here is where my session started and it getting the data from database using $row

 $_SESSION['user_id'] = $row['user_id'];
 $_SESSION['usertype'] = $row['usertype'];
				
				
if($row['usertype']=='Admin')
{			
header("Location: admin.php");
exit();

}

elseif ($row['usertype']=='Employee')
{
header("Location: employee.php");
exit();

}

elseif ($row['usertype']=='Client') {
header("Location: client.php");
exit();
}
			
			}
				
		}

else
{
header("Location:login.php?login=false");
exit();	 

}
		
?>