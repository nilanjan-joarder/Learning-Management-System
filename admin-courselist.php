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


        <div style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
            <img src="images/iconoir_notes.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
            <a href="courselist.php" style="text-decoration: none;">
                <p class="nav-bar-notes" style="margin-left:40px">Course List</p>
            </a>
        </div>
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
    <input type="text" class="search-bar" id="courseSearch" placeholder="Search for a course...">
        <br>
        <img src="images/ri_search-line.png" alt="" srcset="" id="search-icon">
        <button class="profile" onclick="toggleLogout()" style="background-color:transparent" ;>
            <img src="images/admin-picture-removebg-preview.png" alt="" id="profile-image">
        </button>
        <div id="logout">
            <a href="adminlogout.php">
                <div class="logout">LOGOUT
                </div>
            </a>
        </div>

        <div class="first-row">
            <div class="courses">
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
                <p id="course-price">Rs 549/-</p>
                <a href="playlist.html" id="reactenroll"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
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
                <p id="course-price">Rs 499/-</p>
                <a href="playlist.html" id="fullstackenroll"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
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
                <p id="course-price">Rs 499/-</p>
                <a href="playlist.html" id="basicwebenroll"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
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
                <p id="course-price">Rs 499/-</p>
                <a href="playlist.html" id="nodejsenroll"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
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
                <p id="course-price">Rs 499/-</p>
                <a href="playlist.html"><button>VIEW PLAYLIST</button></a>
            </div>
        </div>

        <div class="second-row">
            <div class="courses">
                <img src="images/kotlin.jpg" alt="" srcset="" class="course-img">
                <div class="course-image"></div>
                <h2 id="course-details-heading">
                    Kotlin
                </h2>
                <h2 id="course-details-subheading">
                    Beginner to Advanced
                </h2>
                <h2 id="course-details-tagline">
                    Kotlin | Android A-Z, Firebase Android, Android Studio & Projects
                </h2>
                <p id="course-price">Rs 549/-</p>
                <a href="playlist.html"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
                <img src="images/flutter.jpg" alt="" srcset="" class="course-img">
                <div class="course-image"></div>
                <h2 id="course-details-heading">
                    Flutter & Dart
                </h2>
                <h2 id="course-details-subheading">
                    The Complete Guide-2024
                </h2>
                <h2 id="course-details-tagline">
                    Flutter Framework for building native iOS and Android apps.
                </h2>
                <p id="course-price">Rs 549/-</p>
                <a href="playlist.html"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
                <img src="images/java.jpg" alt="" srcset="" class="course-img">
                <div class="course-image"></div>
                <h2 id="course-details-heading">
                    Android with Java
                </h2>
                <h2 id="course-details-subheading">
                    Master Course with Java
                </h2>
                <h2 id="course-details-tagline">
                    Learn Android App Development java with Android Studio & Java.
                </h2>
                <p id="course-price">Rs 549/-</p>
                <a href="playlist.html"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
                <img src="images/andoid development.jpg" alt="" srcset="" class="course-img">
                <div class="course-image"></div>
                <h2 id="course-details-heading">
                    Full Android Dev
                </h2>
                <h2 id="course-details-subheading">
                    14 Real Apps-46 Hours
                </h2>
                <h2 id="course-details-tagline">
                    Learn android development with Android Studio &amp; Java and level up.
                </h2>
                <p id="course-price">Rs 549/-</p>
                <a href="playlist.html"><button>VIEW PLAYLIST</button></a>
            </div>
            <div class="courses">
                <img src="images/andoroid hacking.jpg" alt="" srcset="" class="course-img">
                <div class="course-image"></div>
                <h2 id="course-details-heading">
                    Android Hacking
                </h2>
                <h2 id="course-details-subheading">
                    The Complete Guide 2024
                </h2>
                <h2 id="course-details-tagline">
                    Android Penetration Testing from scratch
                </h2>
                <p id="course-price">Rs 549/-</p>
                <a href="playlist.html"><button>VIEW PLAYLIST</button></a>
            </div>
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