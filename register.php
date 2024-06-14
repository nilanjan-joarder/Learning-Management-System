<?php
require 'connect.php';

if(isset($_POST["submit"])){
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
if(mysqli_num_rows($duplicate) > 0){
echo
"<script> alert('Username or Email Has Already Taken'); </script>";
}
else{
if($password== $confirmpassword){
$query = "INSERT INTO tb_user VALUES('', '$fullname', '$username', '$email', '$password')";
mysqli_query($conn, $query);
echo
"<script> alert('Registration Successful'); </script>";
}
else{
echo
"<script> alert('Password Does Not Match'); </script>";
}
}
}
?>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
     * {
    margin:0;
    padding:0;
  box-sizing: border-box;
}
:root{
    font-family:Poppins
}

a {
    text-decoration: none;
    color: black;
    margin-left: 0px;
    margin-top: 10px;
    display: flex;
    font-size: 13px;
}

html, body {
  height: 100%;
  width: 100%;
  overflow: hidden;
}
    body {
        /* background-image: linear-gradient(to bottom, #5356FF, #378CE7,#67C6E3); */
    }
    .content{
        display:flex;
    }
    .left{
       
        height:100vh;
        width:50%;
    }
    .right{
        background-image: linear-gradient(to bottom, #5356FF, #378CE7,#67C6E3);
        height:100vh;
        width:50%;
        display: flex;
    justify-content: center;
    align-items:center;
    }
    h2{
      
    display: flex;
    justify-content: center;
    color: black;
    padding-top: 50px;
    font-size: 35px;
    margin-top: 20px;
}
    #login-page{
        height:400px
    }
form {
    margin-top: 10px;
    margin-left: 150px;
    width: 500px;
    height: 290px;
    background-color: #ffffff29;
    /* border: 1px solid gray; */
    border-radius: 10px;
    padding-top: 50px;
    padding-left: 100px;
}
input {
    border-radius: 5px;
    border-bottom: 1px solid black;
    border-top:none;
    border-left:none;
    border-right:none;
    width: 280px;
    margin-top: -20px;
    margin-bottom:10px;
    height: 20px;
    margin-bottom: -5px;
    outline:none;
}
    label{
        
    font-size: 15px;
    color: black;
    display:block;
    padding-top: 20px;

    }
    button{
    background-color:#5356FF;
    margin-top: 20px;
    width: 280px;
    height: 35px;
    border-radius: 5px;
    border: none;
    margin-left: 0px;
    color:white;
    font-family:poppins;
    font-size:15px
    }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>
<body>
<div class="content">
    <div class="left">
<h2>Create New Account</h2>
<form class="" action="" method="post" autocomplete="off">
<label for="fullname">Name: </label><br>
<input type="text" name="fullname" id = "name" required value=""> <br>
<label for="username">Username: </label><br>
<input type="text" name="username" id = "username" required value=""> <br>
<label for="emai">Email: </label><br>
<input type="email" name="email" id = "email" required value=""> <br>
<label for="password">Password: </label><br>
<input type="password" name="password" id = "password" required value=""> <br>
<label for="confirmpassword">Confirm Password: </label><br>
<input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
<button type="submit" name="submit">Register</button>
<a href="login.php">Already have an acoount? Login</a>
</form>
</div>
<br>
<div class="right">
<img src="images/login-page.png" alt="" srcset="" id="login-page">
</div>
</div>
</body>
</html>