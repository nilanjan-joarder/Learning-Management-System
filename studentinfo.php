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
?><!DOCTYPE html>
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
      <img src="images/iconoir_home.png" alt="" srcset="" class="nav-icons" >
      <a href="admin.php" style="text-decoration: none;">
        <p >Dashboard</p>
      </a>
    
    <div style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
    <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
    <a href="studentinfo.php" style="text-decoration: none;">
      <p style="margin-left:40px">Student Info</p>
    </a>
    </div>
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
    <h1 id="title" >
    Registered students
  </h1>
  <table>
    <tr>
        <th>Serial No.</th>
        <th>Student Name</th>
        <th>Student Email Id</th>
    </tr>
    <?php
$conn = mysqli_connect("localhost", "root", "", "reglog");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fullname, email FROM tb_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fullname"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

  </table>
  </div>


<script src="script.js"></script>
</body>
</html>