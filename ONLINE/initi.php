<?php
    include("config.php");


     
    if (isset($_POST["username"],$_POST["password"]))
    {
		$username=$_POST["username"];
        $password=$_POST["password"];
        //$usertype=$_POST["type"];

       //Dencryipt password using sha1()
        $password=sha1($password);

        //Query to select Data from the database
        $sql = "SELECT username FROM users WHERE username='$username' and password = '$password'";
        $result=mysqli_query($con,$sql);


        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        
        if($count==1 && $row['usertype']=='Admin') {
            $_SESSION['user_id']=$username;
            header("Location: admin.php");
        }
		elseif($count==1 && $row['usertype']=="Client") {
             $_SESSION['user_id']=$username;
            header("Location: client.php");
        }	
		elseif($count==1 && $row['usertype']=="Employee") {
             $_SESSION['user_id']=$username;
           header("Location: employee.php");
        }	
		else {
			header("Location:login.php?login=false");
        }
        
    }
?>