<?php
include'config.php';
if(!isset($_SESSION['user_id'])){
    header("location:login.php?login=Please, Login to the system to use it.");
    exit();
}

if(isset($_SESSION["usertype"]) != "Admin"){
    header("location:login.php?login= Your not allowed to access this area");
    exit();
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>ONLINE MOVIE ADMIN PANEL</title>
</head>
<body>
    <center>
    <h1>Admin Panel</h1>
     &nbsp;<a href="logout.php">logout</a><br><br>
        <a href="regEmployee.php">Register Employee</a>
        <a href="regFilm.php">Register Film</a><br><br>
        <h align="left">Welcome  </h>
    </form> <br><br>
     <h4>List of registerd movies</h4><br>
     </center>
     <table border="" align="center" width="87%"  > 
         <tr>
             <th>SN. </th>
             <th>Film Title</th>
             <th>Producer</th>
             <th>Theme</th>
             <th>Year of production</th>
             <th>price</th>
             <th hidden="" colspan="2">Action</th>
         </tr>
</body>
</html>
<?php
$sql = "select * from film";

$result =mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td ><?php echo $row['film_id'];?></td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['producer'];?></td>
<td><?php echo $row['theme'];?></td>
<td><?php echo $row['year_of_production'];?></td>
<td><?php echo $row['price'];?></td>
<td  ><div align="center"><a href ="deleteFilm.php?film_id=<?php echo $row['film_id'];?>">Delete</a></div></td>
<td ><div align="center"><a href ="updateFilm.php?film_id=<?php echo $row['film_id'];?>">Update</a></div></td>
</tr>
<?php
}
?>
</table>

