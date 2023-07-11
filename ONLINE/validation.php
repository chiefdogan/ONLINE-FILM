 <?php
include("config.php");

 // Define variables and initialize with empty values

      $email = $password = "";

      $email_err = $password_err = "";



      // Processing form data when form is submitted

      if($_SERVER["REQUEST_METHOD"] == "POST"){



          // Check if email is empty

          if(empty(trim($_POST["email"]))){

              $email_err = 'Please enter an email address.';

          } else{

              $email = trim($_POST["email"]);

          }



          // Check if password is empty

          if(empty(trim($_POST['password']))){

              $password_err = 'Please enter your password.';

          } else{

              $password = trim($_POST['password']);

          }



          // Validate credentials

          if(empty($email_err) && empty($password_err)){

              // Prepare a select statement

              $sql = "SELECT email, password FROM users WHERE email = ?";



              if($stmt = mysqli_prepare($con, $sql)){

                  // Bind variables to the prepared statement as parameters

                  mysqli_stmt_bind_param($stmt, "s", $param_email);

                  // Set parameters

                  $param_email = $email;

                  // Attempt to execute the prepared statement

                  if(mysqli_stmt_execute($stmt)){

                      // Store result

                      mysqli_stmt_store_result($stmt);

                      // Check if email exists, if yes then verify password

                      if(mysqli_stmt_num_rows($stmt) == 1){

                          // Bind result variables

                          mysqli_stmt_bind_result($stmt, $email, $hashed_password);

                          if(mysqli_stmt_fetch($stmt)){

                              if(password_verify($password, $hashed_password)){

                                  /* Password is correct, so start a new session and

                                  save the email to the session */

                                  

                                  $_SESSION['email'] = $email;

                                  // $sql = "SELECT department FROM employees WHERE email='$email'" ;
                                  $statement = mysqli_query($conn, $sql);

                                    header("Location: index.php");

                                // Close statement

                                //mysqli_stmt_close($statement);

                                //header("location: sales");

                              } else{

                                  // Display an error message if password is not valid

                                  $password_err = 'The password you entered was not valid. Please try again.';

                              }

                          }

                      } else{

                          // Display an error message if email doesn't exist

                          $email_err = 'No account found with that email. Please recheck and try again.';

                      }

                  } else{

                      echo "Oops! Something went wrong. Please try again later.";

                  }

              }



              // Close statement

              mysqli_stmt_close($stmt);

          }



          // Close connection

          mysqli_close($con);

      }



    






