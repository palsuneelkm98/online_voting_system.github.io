<?php
   session_start();
   if(isset($_SESSION['login'])){     
    session_destroy();
    $_SESSION['login']="";
    $_SESSION['userData']="";
    $_SESSION['groupData']="";
    header("location:../");
   }else{
    header("location:../");
   }
?>