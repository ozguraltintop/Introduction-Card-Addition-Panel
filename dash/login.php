<?php

 include ("../db/data.php");
 
 if(true)
 {
  $user =$_POST["user"];
  $pass =$_POST["pass"];



  $query  = $db->query("SELECT * FROM admin WHERE user='$user' && pass='$pass'");
  if ( $say = $query -> rowCount() ){

   if( $say > 0 ){
    session_start();
    $_SESSION['oturum']=true;
    $_SESSION['user']=$user;
    $_SESSION['pass']=$pass;
    
    header("Location:admin.php");
    
    
   }else{
    header("Location:index.php");
   }
  }else{
   header("Location:index.php");;
  }
 }else{
  header("Location:index.php");
 }
 
?>