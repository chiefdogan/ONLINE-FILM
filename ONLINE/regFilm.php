<!DOCTYPE html>
<html lang="en">
<head>

    <title>ONLINE MOVIE </title>
</head>
<body>
        <table align="center">
            <form  method="post" action="addfilm.php">
            <th align="center">
    <h1 align="center">Register film</h1></th>

    <tr>
        <td>Film Title :</td>
        <td><input type="text" name="title"  placeholder="film title" required=""></td>    
    </tr>

    <tr>
        <td>Film Producer :</td>
       <td><input type="text" name="producer"  placeholder="Producer" required=""></td>
   </tr>

        <tr>
        <td>Film Year Production :</td>
        <td><input type="date" name="year_of_production"  ></td></tr>

        <tr>
        <td>Film  Price :</td>
        <td>
        <input type="text" name="price"  placeholder="Price" required="">
        </td>
        </tr>

        <tr>
        <td>Film Theme :</td>
        <td>
            <select name="themes"  required="">
            <option value="Drama">Drama</option>
            <option value="Comedy">Comedy</option>
            <option value="Adventure">Adventure</option>
            <option value="Advocacy">Advocacy</option>
            <option value="Education">Education</option>
        </select>
    </td>
    </tr>
    
    <tr>
    <td align="center">
        <input type="submit" name="addfilm" value="Add Film">
        <input type="reset" name="reset" value="reset">
    </td>
    </tr>

</form>
</table>
</body>
</html>