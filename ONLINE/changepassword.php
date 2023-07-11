<!DOCTYPE html>
<html lang="en">
<head>

    <title>Change password</title>
</head>
<body>

    
    <table align="center">
    	<form  method="post" action="Changepassword.php">
    	<th align="center"><h3>Change password</h3></th>
    	<tr>
    		<td>Enter Old Password :</td><td><input type="text" name="old_password" placeholder="enter old password"></td>
    	</tr>

    	<tr>
    		<td>Enter New Password :</td><td><input type="text" name="new_password" placeholder="enter new password"></td>
    	</tr>
         
         <tr>
    		<td colspan="2"><input type="submit"  value="Change" name="reset"></td>
    	</tr>
</form>
</table>
</body>
</html>

<?php
include'config.php';

$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];

$old_password=sha1($old_password);
$new_password=sha1($new_password);

 $sql = "Update password set password='$new_password' where password='$old_password'";
 $result = mysqli_query($con,$sql);

if($sql)
{

   header('<script type="text/javascript">alert("Password Updated Successfully");</script>');

}

else
{
	
   header('<script type="text/javascript">alert("Password Failed to be  Updated");</script>');
}

?>