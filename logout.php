<?php
 /**
  * LOG SYSTEM .
  */
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>