<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Registration </title>
</head>
<body>
    <table width="20%" align="center" border="0">
        <form  method="post" action="addEmployee.php">
            
            <th colspan="2"><h1 align="center">ONLINE MOVIE</h1>
    <h3 align="center">Employee Registration</h3></th>
        <tr>
            <td>Username :</td> 
            <td> <input type="text" name="username"  placeholder=" Enter username"></td>
        </tr>

        <tr>
            <td> password :</td> 
            <td><input type="password" name="password"  placeholder="Enter password"></td>
        </tr>

        <tr hidden=""> 
            <td>Usertype :</td> 
            <td>
                <select name="type" required>
                <option disabled="">--Usertype--</option>
                <option value="Employee" selected=""> Employee</option>
                </select> </td>
        </tr>

        <tr>
            <td>Email : </td> 
            <td><input type="email" name="email"  placeholder="Enter email"> </td>
        </tr>

        <tr>
            <td colspan="2" align="center"><br>
                 <input type="submit" name="Register" value="Register">
                 <input type="reset" name="Register" value="Reset">
            <br><br>
        </td>

        </tr>

 </table>
</form>   
</body>
</html>

