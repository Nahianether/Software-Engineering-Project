<?php
   session_unset();
   session_destroy();
   header("Location:volunteerLogin.php");

?>