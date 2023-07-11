<?php 

include("config.php");

//code to display error message 
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
      $color="red";
}
else{
    $login_message="Please Login To Continue";
      $color="green";
}

?>



<title>ONLINE MOVIE</title>

<body>
    <table width="30%" border="0" align="center">
        <form method="post" action="init.php" align="center" >
        <th colspan="2">
            
                <h2 class="text-white text-center">ONLINE MOVIE </h2>
                <h3>User Login</h3>
              </div>
        </th>

        <tr>
            <td colspan="2" align="center">
                <?php  echo "<font size='4' color='$color'>$login_message</font>";?>
              
           </td>
        </tr>


        <tr>
            <td></td>

            <td align="center">
                
                 <input  type="text" name="username" class="form-control" placeholder="Enter Username " size="25%">
                    
               
            </td>

        </tr>

        
        <tr>
            <td></td>

            <td align="center">
              
          <input type="password" class="form-control" name="password" placeholder=" Enter Password" size="25%" ><br>
          <small  style="font-style: italic; font-size: 9px;">never share your Password with anyone else.</small>
            </td>

        </tr>

        <tr>
            <td colspan="2" align="center">
                <div class="form-group">
                 <input type="submit" name="login" value="login">
                 <input type="reset" name="reset" value="reset">
                <br><br>
                Don`t have an account?<a href="register.php">&nbsp SignUp here.!</a>
               </div>
            </td>

        </tr>

 </form>
</table>