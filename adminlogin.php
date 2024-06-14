<?php
require 'adminconnect.php';

if(isset($_POST["submit"])){
$usernameemail = $_POST["usernameemail"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM adminlogin WHERE username = '$usernameemail' OR email = '$usernameemail'");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
if($password == $row["password"]){
$_SESSION["login"] = true;
$_SESSION["id"] = $row["id"];
header("Location: admin.php");
}
else{
echo
"<script> alert('Wrong Password'); </script>";
}
}
else{
echo
"<script> alert('User Not Registered'); </script>";
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
        background-color:#233A4E;
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
    margin-top: 120px;
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
    margin-top: -10px;
    margin-bottom:10px;
    height: 20px;
    margin-bottom: 5px;
    outline:none;
}
    label{
        
    font-size: 15px;
    color: black;
    display:block;
    padding-top: 20px;

    }
    button{
        background-color:#233A4E;
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
<title>Login</title>
</head>
<body>
    <div class="content">
    <div class="left">
<h2>Admin Login</h2>
<form class="" action="" method="post" autocomplete="off">
<label for="usernameemail">Username or Email: </label><br>
<input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
<label for="password">Password</label><br>
<input type="password" name="password" id = "password" required value=""> <br>
<button type="submit" name="submit">Login</button>
<a href="adminregister.php">New admin? Register</a>
</form>
</div>
<br>
<div class="right">
<video src="images/login-admin.mp4" autoplay muted ></video>
</div>
</div>
</body>
</html>