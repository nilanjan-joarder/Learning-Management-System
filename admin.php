<?php
require 'adminconnect.php';
if(!empty($_SESSION["id"])){
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM adminlogin WHERE id = $id");
$row = mysqli_fetch_assoc($result);
}
else{
header("Location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

  <title>Document</title>
</head>

<body>
  <div class="desktopnav">
    <p id="logo">LOGO</p>
    <div style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
      <img src="images/iconoir_home.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
      <a href="admin.php" style="text-decoration: none;">
        <p style="margin-left:40px">Dashboard</p>
      </a>
    </div>
    <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons">
    <a href="studentinfo.php" style="text-decoration: none;">
      <p>Student Info</p>
    </a>
    <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons">
    <a href="employeeinfo.php" style="text-decoration: none;">
      <p class="nav-bar-notes">Employee Info</p>
    </a>
    <img src="images/iconoir_notes.png" alt="" srcset="" class="nav-icons">
    <a href="admin-courselist.php" style="text-decoration: none;">
      <p class="nav-bar-notes">Course List</p>
    </a>
    <img src="images/icon-create-course.png" alt="" srcset="" class="nav-icons">
    <a href="create-course.php" style="text-decoration: none;">
      <p class="nav-bar-notes">Create Course</p>
    </a>
    <img src="images/icon-video.png" alt="" srcset="" class="nav-icons">
    <a href="upload-video.php" style="text-decoration: none;">
      <p class="nav-bar-notes">Upload Video</p>
    </a>

  </div>
  <div class="main-content">
    <input type="text" placeholder="Search" class="search-bar" style="visibility:hidden;">
    <br>
    <img src="images/ri_search-line.png" alt="" srcset="" id="search-icon" style="visibility:hidden;">
    <button class="profile" onclick="toggleLogout()" style="background-color:transparent" ;>
      <img src="images/admin-picture-removebg-preview.png" alt="" id="profile-image">
    </button>
    <div id="logout">
      <a href="adminlogout.php">
        <div class="logout">LOGOUT
        </div>
      </a>
    </div>
      
    <h1 id="title">Hello <?php echo $row["fullname"];?></h1>
    <div class="admin-dashboard-first-row">
    <div class="totalstudents"> 
      <p id="dashboard-data-title">Total students</p>
      <img src="images/student-icon.png" id="student-icon">
      <p id="dashboard-data-1">8</p>
    </div>
    <div class="totalemployees">
      <p id="dashboard-data-title">Total Employees</p > 
      <img src="images/employee-icon.png" id="employee-icon">
      <p id="dashboard-data-2">2</p></div>
    <div class="totalcourses">
      <p id="dashboard-data-title">Total Courses</p> 
      <img src="images/courses-icon.png" id="courses-icon">
      <p id="dashboard-data-3">16</p></div>
      <div class="totalcertificates">
      <p id="dashboard-data-title">Total Certificates</p> 
      <img src="images/certificate-icon.png" id="certificate-icon">
      <p id="dashboard-data-4">16</p></div>
    </div>
    <div class="notifications">
    <p id="dashboard-notification">Notifications</p > 
    <ul id="notification-list">
    <li>Our LMS has been updated with new features and improvements. Explore the enhanced functionality today</li>
    <li>Don't miss out on our upcoming webinar, 'CODING,' on 24.04.24. Register now to secure your spot and expand your knowledge!</li>
    <li>A new discussion has been started . Join the conversation and share your insights with fellow learners!</li>
    <li>We value your feedback! Please take a moment to share your thoughts on your learning experience by completing our brief survey.</li>
    
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

  </div>
<script src="script.js"></script>
</body>

