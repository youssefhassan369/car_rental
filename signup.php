<?php include('register.php') ?>

<html>
<head>
<link rel="stylesheet" media="screen" href="bootstrap.min.css">

<script type = "text/javascript">
   function do_signup()
   {
      var email = document.forms["form2"]["email"].value;
      var pass = document.forms["form2"]["pwd"].value;
      var phone = document.forms["form2"]["phone"].value;
      var ssn = document.forms["form2"]["ssn"].value;
      if(reg()&& validateEmail()&&SSNnumber()&&phonenumber())

      {
         
         $.ajax
            ({
            type:'post',
            url:'index.php',
            data:{
               do_signup:"do_signup",
               email:email,
               password:pass,
               phone: phone ,
               ssn:ssn,
            },
            success:function(response) 
            {
               if(response=="success")
               {
                  window.location.href="submit.php";
               }
               else
               {
                     
                     alert("Wrong Details");
               }
            }
         });
      } 
         return false;
   }


   function reg()
   {
      var empt1 = document.forms["form2"]["Fname"].value;
      var empt2 = document.forms["form2"]["email"].value;
      var empt3 = document.forms["form2"]["pwd"].value;
      var empt4 = document.forms["form2"]["cpwd"].value;
      var empt5 = document.forms["form2"]["Lname"].value;
      var empt6 = document.forms["form2"]["phone"].value;
      var empt7 = document.forms["form2"]["birth"].value;
      var empt8 = document.forms["form2"]["address"].value;
      var empt9 = document.forms["form2"]["ssn"].value;
      var empt10 = document.forms["form2"]["Gender"].value;

      if (empt1.trim() == "" || empt2.trim()=="" || empt3.trim()=="" || empt4.trim()=="" || empt5.trim()==""|| empt6.trim()==""|| empt7.trim()==""|| empt8.trim()=="" || empt9.trim()==""|| empt10.trim()=="")
      {
         alert("Please fill the empty field");
         return false;
      }
      else if(empt3 !=empt4)
      {
         alert("password & confirm password didn't match, please try again");
         return false;
      }
      else 
      {
         return true; 
      }
   } 

   function SSNnumber()
{
   ssn = document.forms["form2"]["ssn"].value
  var ssnPattern = /^\d{14}$/;
  if(ssnPattern.test(ssn))
        {
      return true;
        }
      else
        {
        alert("SSN must be 14 digit");
        return false;
        }
}

   function phonenumber()
{
   phone = document.forms["form2"]["phone"].value
  var phonePattern = /^\d{11}$/;
  if(phonePattern.test(phone))
        {
      return true;
        }
      else
        {
        alert("Phone Number must be 11 digit");
        return false;
        }
}


   function validateEmail(){      
   email =document.forms["form2"]["email"].value
   var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   if( emailPattern.test(email))
   {
      return true;
   }
   else
   {
      alert("You have entered an invalid email address!");
      return false;
   }
 } 
   </script>
</head>
<body class="modal-body">
<style>
body {
  background-image: url('login_wallpaper.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<main  class="container" style="margin-top: 10%;margin-left:30%"> 
   <h1 style="color:darkgreen;  margin-left:25%">Sign up<h1>
<form action='#' method='post' onsubmit="return do_signup();" id="form2">
<div class="form-group">
<label class="form-control-plaintext" >First name:</label>
<input style="width:66%"type='text' class="form-control" name='Fname'/>
<label class="form-control-plaintext" >Last name:</label>
<input style="width:66%"type='text' class="form-control" name='Lname'/>
<label class="form-control-plaintext" >SSN:</label>
<input style="width:66%"type='number' class="form-control" name='ssn'/>
<label class="form-control-plaintext" >Email:</label>
<input style="width:66%"type='text' class="form-control" name='email'/>
<label class="form-control-plaintext" >Password:</label>
<input style="width:66%"type='password' class="form-control" name='pwd'/>
<label class="form-control-plaintext" >Confirm Password:</label>
<input style="width:66%"type='password' class="form-control" name='cpwd'/>
<label class="form-control-plaintext" >Phone:</label>
<input style="width:66%"type='number' class="form-control" name='phone'/>
<label class="form-control-plaintext" >Gender:</label>
<select name="Gender" id="Gender">
<option class="form-control-plaintext"  value="">M/F</option>
<option class="form-control-plaintext" value="f">female</option>
<option  class="form-control-plaintext" value="m">male</option>
</select>
<label class="form-control-plaintext" for="birth_date">Birth Date:</label>
<input  type="date" id="birth_date" name="birth">
<label class="form-control-plaintext" >Address:</label>
<input style="width:66%"type='text' class="form-control" name='address'/>

</div>

<div style="margin-left:30%">
<input type='submit' name='reg_user' class="btn btn-success" value='Sign Up'/>
</div>

<a href="index.php" style="color:black ; font-size: 25px">Already have an account ?</a>
</form>
</main>
</body>
</html>

