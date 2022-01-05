<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="carrentaldb";

$db_connect= mysqli_connect($host,$user,$password,$db);
$db_select = mysqli_select_db($db_connect,$db);

if(isset($_POST['reg_user'])){
    $SSN = $_POST['ssn'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $password_1 = md5($_POST['password_1']);
    $password_2 = md5($_POST['password_2']);
    $sex = $_POST['sex'];
    $birth_date = $_POST['birth_date'];
    $address = $_POST['address'];

    $sql = "SELECT * FROM customer WHERE email='$email'";
    $result = mysqli_query($db_connect,$sql);
        
    if(mysqli_num_rows($result) == 0)
    {
        $sql = "INSERT INTO carrental (ssn,fname,lname,phone,email,password,sex,birth_date,address)
        VALUES ('$SSN','$fname','$lname','$phone','$email','$password_1','$sex','$birth_date','$address')";
        $result = mysqli_query($db_connect,$sql);

        if($result)
        {
            echo"<script> alert('Registration Done Successfully')</script>";
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            header('location:welcome.php');
            $SSN ="";
            $fname ="";
            $lname = "";
            $phone ="";
            $email = "";
            $_POST['password_1']="";
            $_POST['password_2']="";
            $sex = "";
            $birth_date = "";
            $address = "";

        }else {
            echo "<script>alert('Something went wrong')</script>";
             }
    }else {
        echo "<script>alert('Email Already Exists !!')</script>";
          }   
        }
    
?>