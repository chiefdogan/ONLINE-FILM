<?php
include'config.php';

$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];

$old_password=sha1($old_password);
$new_password=sha1($new_password);

 $sql = " update users set password='$new_password' where password='$old_password'";
 $result = mysqli_query($con,$sql);

if($sql)
{

   header('<script type="text/javascript">alert("Password Updated Successfully");</script>');

}

else{
	
   header('<script type="text/javascript">alert("Password Failed to be  Updated");</script>');
}

?>