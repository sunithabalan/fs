<?php  
  
include("db_connection.php");  
  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
	 
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
    
    $run=mysqli_query($dbcon2,$check_user);  
     if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
	  
    } 
	
	
	
 
?>