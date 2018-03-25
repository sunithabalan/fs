<?php    
$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"users");
$dbcon2=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon2,"users");
$dbcon3=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon3,"contact");


?>