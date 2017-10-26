<?php
//start session
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
exit();
echo '<script type="text/javascript">location.href = "../register/login.php"</script>';
?>