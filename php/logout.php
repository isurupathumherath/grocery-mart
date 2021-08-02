<?php
session_start(); 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../index.php");
exit;
?>

<!--Created by: Herath H.M.I.P(IT20125516) -->