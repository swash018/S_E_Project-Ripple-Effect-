<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ./LoginPage/LoginPage.php");
   }
?>
