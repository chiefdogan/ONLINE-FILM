<?php
include'config.php';
$id =$_GET['film_id'];

//query that is selecting data from database and view on html form
$sql = "select * from film where film_id='$id'";

//this is how the above query is being executed
$query = mysqli_query($con,$sql);

//query that is used to view executed data from the query into users view
$row = mysqli_fetch_array($query);

if(isset($_POST['upload']))
{
$producer = $_POST['producer'];
$price = $_POST['price'];
$theme = $_POST['themes'];
$year= $_POST['year'];
$title= $_POST['title'];

$update= "update film set title='$title',producer='$producer',theme='$theme',year_of_production='$year',price='$price' WHERE film_id='$id'";

$result= mysqli_query($con,$update);
if($result)
{
header("Location:admin.php");

}
else{
echo "Record Not Updated";
}
}

?>
<form action="" method="POST">
<table align="center"  border = "0">

<tr><th colspan="2"><h3>Edit film <?php echo $row['title'];?></h3></th></tr>
<tr align="center"><td>Title :</td><td><input type=" text" name="title" value = "<?php echo $row['title'];?>" placeholder "Enter Movie Title" required></td></tr>
<tr align="center"><td>Producer:</td><td><input type=" text" name="producer" value = "<?php echo $row['producer'];?>" placeholder "Enter your producer " required></td></tr>
<tr align="center"><td>Themes:</td><td><select name="themes" value = "<?php echo $row['usertype'];?>" required>
	<option></option>
	<option value="Drama">Drama</option>
    <option value="Comedy">Comedy</option>
    <option value="Adventure">Adventure</option>
    <option value="Advocacy">Advocacy</option>
    <option value="Education">Education</option>
        </select></td></tr>
 <tr align="center"><td>Year Of Production :</td><td><input type="date" name="year" value = "<?php echo $row['year_of_production'];?>"  required></td></tr>
 <tr align="center"><td>Price :</td><td><input type=" text" name="price" value = "<?php echo $row['price'];?>"  required></td></tr>
  <tr align="center"><td colspan="2"><input type="submit" value="upload" name ="upload"></td></tr>

</table>
</form>