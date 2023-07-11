<?php
include("config.php");
if(!isset($_SESSION['user_id'])){
    header("location:login.php?login=Please, Login to the system to use it.");
    exit();
}

if(isset($_SESSION["usertype"]) != "Client"){
    header("location:login.php?login= Your not allowed to access this area");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Client panel</title>
</head>
<body>
<center>
    <h1>Client Panel</h1> 
     &nbsp;<a href="logout.php">logout</a><br><br>
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
</tr>
<?php
}
?>
</table>
