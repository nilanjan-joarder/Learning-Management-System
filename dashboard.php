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
 
  <title>Document</title>
</head>

<body>
  <div class="desktopnav" >
    <p id="logo">LOGO</p>
    <div  style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
    <img src="images/iconoir_home.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
    <a href="dashboard.php" style="text-decoration: none;">
      <p style="margin-left:40px" >Dashboard</p>
    </a>
    </div>
    <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons">
        <a href="purchased.php" style="text-decoration: none;">
          <p>Purchased</p>
        </a>
    <img src="images/iconoir_notes.png" alt="" srcset="" class="nav-icons">
    <a href="notes.php" style="text-decoration: none;">
      <p class="nav-bar-notes">Notes</p>
    </a>
    <img src="images/fluent_certificate-16-regular.png" alt="" srcset="" class="nav-icons">
    <a href="certificates.php" style="text-decoration: none;">
      <p class="nav-bar-certificates">Certificates</p>
    </a>
    <img src="images/uil_setting.png" alt="" srcset="" class="nav-icons">
    <a href="settings.php" style="text-decoration: none;">
      <p class="nav-bar-setting">Settings</p>
    </a>
  </div>
  <div class="main-content">
    <input type="text" placeholder="Search" class="search-bar" style="visibility:hidden;";>
    <br>
    <img src="images/ri_search-line.png" alt="" srcset="" id="search-icon" style="visibility:hidden;"; >
        <button class="profile" onclick="toggleLogout()" >
            <img src="images/dashboard-person.png" alt="" id="profile-image">
          </button>
          <div id="logout"> 
           <a href="index.html"> <div class="dashboard">HOME</div></a>
            <a href="logout.php"><div class="logout">LOGOUT
              
            </div></a>
          </div>
    
    <div class="details">
      <p id="dashboard-name">Hello <?php echo $row["fullname"];?></p>
      <p id="dashboard-name-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam iure modi
        eum quibusdam, quas numquam distinctio nihil saepe alias architecto perferendis </p>
    </div>
    <img src="images/dashboard-person.png" alt="" srcset="" id="dashboard-person">
    

    <p id="courses-text">Notifications</p>
<div class="notifications">
<ul id="notification-list" style="width:650px; margin-left:20px;">
    <li style="  list-style-type: disc; margin-top:10px; margin-left:20px;">Our LMS has been updated with new features and improvements. Explore the enhanced functionality today</li>
    <li style="  list-style-type: disc;margin-top:10px; margin-left:20px;">Don't miss out on our upcoming webinar, 'CODING,' on 24.04.24. Register now to secure your spot and expand your knowledge!</li>
    <li style="  list-style-type: disc;margin-top:10px; margin-left:20px;">A new discussion has been started . Join the conversation and share your insights with fellow learners!</li>
    <li style="  list-style-type: disc;margin-top:10px; margin-left:20px;">We value your feedback! Please take a moment to share your thoughts on your learning experience by completing our brief survey.</li>
    <li style="  list-style-type: disc;margin-top:10px; margin-left:20px;">A new discussion has been started . Join the conversation !</li>
    
    </ul>
</div>
   
  <div class="wrapper-calender">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>
     <script src="script.js" defer></script>
</body>

</html>