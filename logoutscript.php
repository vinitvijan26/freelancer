<?php
 session_start();
 session_destroy();
 unset($_SESSION['email']);
 header("Refresh:2; url=freelancer.php");
 echo "<br><br><br><br>  LOGGING YOU OUT....";
 ?>