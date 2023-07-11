<?php
include'config.php';
$producer = $_POST['producer'];
$price = $_POST['price'];
$theme = $_POST['themes'];
$year= $_POST['year_of_production'];
$title= $_POST['title'];


//$hash=md5($password);
$sql = "insert into film(title,producer,theme,year_of_production,price)values('$title','$producer','$theme','$year','$price')";
$result=mysqli_query($con,$sql);

if($result)

{
    header("Location:employee.php");

}
else{
       echo "Record not Added";
}

?>
</body>
</html>