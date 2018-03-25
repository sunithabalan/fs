
	<?php  
  
include("db_con.php"); 


    $c_name=$_POST['name'];
	$c_email=$_POST['email'];
	$c_message=$_POST['message'];
	
	
    if($c_name=='')
    {  
        echo"<script>alert('Please enter the name')</script>";  
    exit();  
    }  
  
    if($c_email=='')  
    {  
        echo"<script>alert('Please enter the email')
		</script>";		
    exit();  
    }    
    $check_email_query="select * from contact WHERE c_email='$c_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $c_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
	
	if($c_message=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  

    $insert_user="insert into users (c_name,c_email,c_message) VALUE ('$c_name','$c_email','$c_message')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('index.html','_self')</script>";  
		  
    }  
  
  
  

  
?> 