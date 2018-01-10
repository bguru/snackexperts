<?php
   include('config.php');
   session_start();
   
   $userName = $_SESSION['userName'];
   
   $ses_sql = mysqli_query($db,"select userName from usercreate where userName = '$userName' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userName'];
   
   if(!isset($_SESSION['userName'])){
      header("Location:index.php");
   }
?>