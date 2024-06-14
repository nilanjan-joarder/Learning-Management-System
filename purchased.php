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
    <title>Document</title>
</head>
<style>
    .enrolledcourses{
        display: flex;
        justify-content:start;
        align-items: center;
        gap: 20px;
        margin-left: 50px;
        margin-top: 50px;
    }
    #reactenroll2 {
        height: 240px;
    background-color: white;
    border-radius: 10px;
        display: none;
        visibility: hidden;
    }

    #fullstackenroll2 {
        height: 240px;
    background-color: white;
    border-radius: 10px;
        display: none;
        visibility: hidden;
    }

    #basicwebenroll2 {
        height: 240px;
    background-color: white;
    border-radius: 10px;
        display: none;
        visibility: hidden;
    }

    #nodejsenroll2 {
        height: 240px;
    background-color: white;
    border-radius: 10px;
        display: none;
        visibility: hidden;
    }

    #tailwindenroll2 {
        height: 240px;
    background-color: white;
    border-radius: 10px;
        display: none;
        visibility: hidden;
    }
</style>

<body onload="showenroll()">
    <div class="desktopnav" >
        <p id="logo">LOGO</p>
        <img src="images/iconoir_home.png" alt="" srcset="" class="nav-icons">
        <a href="dashboard.php" style="text-decoration: none;">
          <p>Dashboard</p>
        </a>
        <div class="nav-bar-purchased" style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
        <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
        <a href="purchased.php" style="text-decoration: none;">
          <p style="margin-left:40px">Purchased</p>
        </a>
    </div>
        <img src="images/iconoir_notes.png" alt="" srcset="" class="nav-icons">
        <a href="notes.php" style="text-decoration: none;">
          <p>Notes</p>
        </a>
        <img src="images/fluent_certificate-16-regular.png" alt="" srcset="" class="nav-icons">
        <a href="certificates.php" style="text-decoration: none;">
          <p>Certificates</p>
        </a>
        <img src="images/uil_setting.png" alt="" srcset="" class="nav-icons">
        <a href="settings.php" style="text-decoration: none;">
          <p>Settings</p>
        </a>
      </div>
      <div class="main-content">
        <input type="text" placeholder="Search" class="search-bar" id="courseSearch">
        <br>
        <img src="images/ri_search-line.png" alt="" srcset="" id="search-icon">
            <button class="profile" onclick="toggleLogout()" >
                <img src="images/dashboard-person.png" alt="" id="profile-image">
              </button>
              <div id="logout"> 
               <a href="index.html"> <div class="dashboard">HOME</div></a>
                <a href="logout.php"><div class="logout">LOGOUT
                  
                </div></a>
              </div>

              <h1 style="margin-left: 50px; font-size: 20px; font-weight: 500;">Your Courses</h1>

<div class="enrolledcourses">

    <div id="reactenroll2">
        <img src="images/ReactJs.jpg" alt="" srcset="" class="course-img">
        <div class="course-image"><img src="images/course-person.jpg" alt="" srcset="" id="course-person"></div>
        <h2 id="course-details-heading">
            React Js
        </h2>
        <h2 id="course-details-subheading">
            The Complete Guide 2024
        </h2>
        <h2 id="course-details-tagline">
            Dive in and learn React.js from scratch! Learn the best way.
        </h2>
    </div>



    <div id="fullstackenroll2">
        <img src="images/fullstack-web.jpg" alt="" srcset="" class="course-img">
        <div class="course-image"><img src="images/course-person.jpg" alt="" srcset="" id="course-person"></div>
        <h2 id="course-details-heading">
            Full Stack Dev
        </h2>
        <h2 id="course-details-subheading">
            Full Stack Web Development
        </h2>
        <h2 id="course-details-tagline">
            Fullstack web development MERN STACK, nodejs, react, mongodb &amp; more
        </h2>
    </div>


    <div id="basicwebenroll2">
        <img src="images/basic web dev.jpg" alt="" srcset="" class="course-img">
        <div class="course-image"><img src="images/course-person.jpg" alt="" srcset="" id="course-person"></div>
        <h2 id="course-details-heading">
            Frontend Web Dev
        </h2>
        <h2 id="course-details-subheading">
            Web Development-2024
        </h2>
        <h2 id="course-details-tagline">
            Front End Web Development with HTML5, CSS3, Bootstrap 5 &amp; JavaScript
        </h2>
    </div>



    <div id="nodejsenroll2">
        <img src="images/nodejs.jpg" alt="" srcset="" class="course-img">
        <div class="course-image"><img src="images/course-person.jpg" alt="" srcset="" id="course-person"></div>
        <h2 id="course-details-heading">
            Node Js
        </h2>
        <h2 id="course-details-subheading">
            The Complete Guide-2024
        </h2>
        <h2 id="course-details-tagline">
            Build REST APIs with Node.js, GraphQL APIs,add Authentication,& much more!
        </h2>
    </div>


    <div id="tailwindenroll2">
        <img src="images/tailwind.jpg" alt="" srcset="" class="course-img">
        <div class="course-image"><img src="images/course-person.jpg" alt="" srcset="" id="course-person"></div>
        <h2 id="course-details-heading">
            Tailwind CSS
        </h2>
        <h2 id="course-details-subheading">
            The beginner guide-2024
        </h2>
        <h2 id="course-details-tagline">
            Build modern and responsive websites with Tailwind.
        </h2>
    </div>

</div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById('courseSearch');
            const allCourses = document.querySelectorAll('.courses');

            searchInput.addEventListener('input', function() {
                const searchText = this.value.trim().toLowerCase();

                allCourses.forEach(course => {
                    const courseName = course.querySelector('#course-details-heading').innerText.trim().toLowerCase();
                    if (courseName.includes(searchText)) {
                        course.style.display = 'block';
                    } else {
                        course.style.display = 'none';
                    }
                });
            });
        });
    </script>
    <script src="script.js"></script>
</body>

</html>