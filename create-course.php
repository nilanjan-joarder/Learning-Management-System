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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <title>Document</title>
</head>
<style>
    #logout {
  height: 30px;
  width: 170px;
  margin-left: 1080px;
  margin-top: 5px;
  border: 0.5px solid black;
  position:absolute; 
  background-color: rgba(255, 255, 255, 0.923);
  display: none;
  cursor: pointer;
  visibility: hidden;
}
    .search-bar {
    height: 40px;
    width: 600px;
    border-radius: 20px;
    margin-left: 25%;
    margin-top: 25px;
    border: 1px solid gray;
    visibility: hidden;
}
#title {
        margin-left: 50px;
        margin-top: 30px;
        font-weight: 500;
        font-size: 30px;
    }

            .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            
            padding: 10px;
            border: 1px solid #ccc;
            
            box-sizing: border-box;
        }
        input[type="file"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #378CE7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2a6fb9;
        }
</style>
<body>
    <div class="desktopnav">
        <p id="logo">LOGO</p>
        <img src="images/iconoir_home.png" alt="" srcset="" class="nav-icons">
        <a href="admin.php" style="text-decoration: none;">
            <p>Dashboard</p>
        </a>


        <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons">
        <a href="studentinfo.php" style="text-decoration: none;">
            <p>Student Info</p>
        </a>


        <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons">
        <a href="employeeinfo.php" style="text-decoration: none;">
            <p class="nav-bar-notes">Employee Info</p>
        </a>


        
            <img src="images/iconoir_notes.png" alt="" srcset="" class="nav-icons" >
            <a href="admin-courselist.php" style="text-decoration: none;">
                <p class="nav-bar-notes" >Course List</p>
            </a>
      
        <div style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;><img src="images/icon-create-course.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
        <a href="create-course.php" style="text-decoration: none;">
            <p class="nav-bar-notes" style="margin-left:40px">Create Course</p>
        </a>
    </div>
        <img src="images/icon-video.png" alt="" srcset="" class="nav-icons">
        <a href="upload-video.php" style="text-decoration: none;">
            <p class="nav-bar-notes">Upload Video</p>
        </a>
    </div>
    <div class="main-content">
        <input type="text" placeholder="Search" class="search-bar">
        <br>
        <img src="images/ri_search-line.png" alt="" srcset="" id="search-icon"  style="visibility: hidden;">
        <button class="profile" onclick="toggleLogout()" style="background-color:transparent" ;>
            <img src="images/admin-picture-removebg-preview.png" alt="" id="profile-image">
        </button>
        <div id="logout">
            <a href="adminlogout.php">
                <div class="logout">LOGOUT
                </div>
            </a>
        </div>
        <h1 id="title">
            
Establish a course
        </h1>
        <div class="container">

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="course_picture">Course Thumbnail:</label>
                    <input type="file" id="course_picture" name="course_picture" accept="image/*" >
                </div>
                <div class="form-group">
                    <label for="course_name">Course Name:</label>
                    <input type="text" id="course_name" name="course_name" required style="width: 100%; border-radius: 5px;">
                </div>
                <div class="form-group">
                    <label for="course_tagline">Course Tagline:</label>
                    <input type="text" id="course_tagline" name="course_tagline" required style="width: 100%; border-radius: 5px;">
                </div>
                <div class="form-group">
                    <label for="course_description">Course Description:</label>
                    <textarea id="course_description" name="course_description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="course_price">Course Price:</label>
                    <input type="number" id="course_price" name="course_price" required style="width: 100%; border-radius: 5px;">
                </div>
                <div class="form-group">
                    <input type="submit" value="Create">
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>