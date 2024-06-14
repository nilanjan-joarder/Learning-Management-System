<?php
require 'connect.php';
if(!empty($_SESSION["id"])){
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
$row = mysqli_fetch_assoc($result);
}
else{
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <script src="script.js" defer></script>
  <title>Document</title>
</head>

<body>
  <div class="desktopnav">
    <p id="logo">LOGO</p>
    <img src="images/iconoir_home.png" alt="" srcset="" class="nav-icons">
    <a href="dashboard.php" style="text-decoration: none;">
      <p>Dashboard</p>
    </a>
    <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons">
    <a href="purchased.php" style="text-decoration: none;">
      <p>Purchased</p>
    </a>
    <img src="images/iconoir_notes.png" alt="" srcset="" class="nav-icons">
    <a href="notes.php" style="text-decoration: none;">
      <p>Notes</p>
    </a>
    <img src="images/fluent_certificate-16-regular.png" alt="" srcset="" class="nav-icons">
    <a href="certificates.php" style="text-decoration: none;">
      <p>Certificates</p>
    </a>
    <div  style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
    <img src="images/uil_setting.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
    <a href="settings.php" style="text-decoration: none;">
      <p style="margin-left:40px">Settings</p>
    </a>
  </div>
  </div>
  <div class="main-content">
    <input type="text" placeholder="Search" class="search-bar" style="visibility:hidden;";>
    <br>
    <img src="images/ri_search-line.png" alt="" srcset="" id="search-icon" style="visibility:hidden;";>
        <button class="profile" onclick="toggleLogout()" >
            <img src="images/dashboard-person.png" alt="" id="profile-image">
          </button>
          <div id="logout"> 
           <a href="index.html"> <div class="dashboard">HOME</div></a>
            <a href="logout.php"><div class="logout">LOGOUT
              
            </div></a>
          </div>
    <h3>Settings</h3>
    <a href="editprofile.html">
    <div class="setting">
      <h2 id="setting-setting">Edit profile</h2>
      <img src="images/material-symbols-light_navigate-next.png" alt="" srcset="" id="navigate">
    </div>
  </a>
   <a href="privacy-security.html"> <div class="setting">
      <h2 id="setting-setting">Privacy and security</h2>
      <img src="images/material-symbols-light_navigate-next.png" alt="" srcset="" id="navigate">
    </div>    </a>
    <a href="help.html"><div class="setting">
      <h2 id="setting-setting">Help</h2>
      <img src="images/material-symbols-light_navigate-next.png" alt="" srcset="" id="navigate">
    </div></a>
    <a href="login.php"><div class="setting">
      <h2 id="setting-setting">Logout</h2>
      <img src="images/material-symbols-light_navigate-next.png" alt="" srcset="" id="navigate">
    </div></a>
  </div>
  
  <script src="script.js"></script>
</body>

</html>