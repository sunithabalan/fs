<?php  
  
include("db_connection.php"); 


    $user_name=$_POST['name'];
	$user_email=$_POST['email'];
	$user_pass=$_POST['pass'];
	
    if($user_name=='')
    {  
        echo"<script>alert('Please enter the name')</script>";  
    exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')
		</script>";		
    exit();  
    }    
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
	
	if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  

    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('index.html','_self')</script>";  
		  
    }  
  
  
  

  
?> 