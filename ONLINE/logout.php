<?php
session_start();
// remove all session variables
unset($_SESSION['user_id']);
unset($_SESSION['usertype']);
// destroy the session
session_destroy();

//header("Location:index.php");
header("Location: login.php");
exit;
?>
