<?php
session_start();
include "DB connection.php";

$email=$_POST['email'];
$password=$_POST['password'];
$encrypted_password=md5($password);


 
   $query=mysqli_query($connection,"SELECT * 
                                    FROM customer  
                                    WHERE email='$email' AND password='$encrypted_password'") ;
   $res=mysqli_fetch_array($query);
   if($res){
   $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    $userRow = mysqli_fetch_array($result);
    $fname = $userRow['fname'];
    $lname = $userRow['lname'];
    $email = $userRow['email'];
    $_SESSION['email']=$email;
    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    header('location:welcome.php');
    echo"vaild";
   }
   else
   {
    echo"Invaild email or password";
   }
 

 