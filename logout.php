<?php
 session_start();
 echo  $_SESSION["username"];

 if($_SESSION["username"] != null)
 {
   session_unset();
   session_destroy();
   header("Location:admi.php");
  }
?>