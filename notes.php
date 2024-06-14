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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <div  style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
        <img src="images/iconoir_notes.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
        <a href="notes.php" style="text-decoration: none;">
            <p style="margin-left:40px">Notes</p>
        </a>
    </div>
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
        <input type="text" placeholder="Search" class="search-bar" style="visibility: hidden;">
        <br>
        <img src="images/ri_search-line.png" alt="" srcset="" id="search-icon" style="visibility: hidden;">
        
        <button class="profile" onclick="toggleLogout()" >
            <img src="images/dashboard-person.png" alt="" id="profile-image">
          </button>
          <div id="logout"> 
           <a href="index.html"> <div class="dashboard">HOME</div></a>
            <a href="logout.php"><div class="logout">LOGOUT
              
            </div></a>
          </div>
        <nav class="notes-nav">
            <p id="classnotes" onclick="showvideo()">Class Recordings</p>
            <p id="classrecord" onclick="shownote()">Class Notes </p>
        </nav>
        



        <div id="videorecording-div">
        <p id="notes-category">Class recordings</p>
        <div class="first-row-video">
            <a href="videorecord.html">  <video autoplay loop muted plays-inline src="images/production_id_5183275 (1080p).mp4"
                id="video-recording-thumbnail"></video> </a>
                <a href="videorecord.html"><video autoplay loop muted plays-inline src="images/production_id_5183278 (1080p).mp4"
                id="video-recording-thumbnail"></video></a>
                <a href="videorecord.html"><video autoplay loop muted plays-inline src="images/production_id_5183275 (1080p).mp4"
                id="video-recording-thumbnail"></video></a>
                <a href="videorecord.html"><video autoplay loop muted plays-inline src="images/production_id_5183278 (1080p).mp4"
                id="video-recording-thumbnail"></video></a>
        </div>
        <div class="first-row-video-title">
            
                <div class="video-recordings">
                <h2 id="video-tagline">React Js</h2>
                <h4 id="video-time">04 hrs 25 mins</h4>
            </div>
        </a>
            <div class="video-recordings">
                <h2 id="video-tagline">Node JS</h2>
                <h4 id="video-time">03 hrs 26 mins</h4>
            </div>
            <div class="video-recordings">
                <h2 id="video-tagline">Tailwind CSS</h2>
                <h4 id="video-time">02 hrs 50 mins</h4>
            </div>
            <div class="video-recordings">
                <h2 id="video-tagline">Flutter & Dart</h2>
                <h4 id="video-time">06 hrs 10 mins</h4>
            </div>
        </div>
        <div class="second-row-video">
            <a href="videorecord.html">  <video autoplay loop muted plays-inline src="images/production_id_5183275 (1080p).mp4"
                id="video-recording-thumbnail"></video> </a>
                <a href="videorecord.html"><video autoplay loop muted plays-inline src="images/production_id_5183278 (1080p).mp4"
                id="video-recording-thumbnail"></video></a>
                <a href="videorecord.html"><video autoplay loop muted plays-inline src="images/production_id_5183275 (1080p).mp4"
                id="video-recording-thumbnail"></video></a>
                <a href="videorecord.html"><video autoplay loop muted plays-inline src="images/production_id_5183278 (1080p).mp4"
                id="video-recording-thumbnail"></video></a>
        </div>
        <div class="second-row-video-title">
            
                <div class="video-recordings">
                <h2 id="video-tagline">React Js</h2>
                <h4 id="video-time">04 hrs 25 mins</h4>
            </div>
        </a>
            <div class="video-recordings">
                <h2 id="video-tagline">Node JS</h2>
                <h4 id="video-time">03 hrs 26 mins</h4>
            </div>
            <div class="video-recordings">
                <h2 id="video-tagline">Tailwind CSS</h2>
                <h4 id="video-time">02 hrs 50 mins</h4>
            </div>
            <div class="video-recordings">
                <h2 id="video-tagline">Flutter & Dart</h2>
                <h4 id="video-time">06 hrs 10 mins</h4>
            </div>
        </div>
    </div>


    <div id="class-notes-div">
    <p id="notes-category">Class notes</p>
        <div class="first-row">
            <a href="https://www.tutorialspoint.com/javascript/javascript_tutorial.pdf" download><div class="class-notes"><img src="images/notes-js.png" alt="" srcset="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px; color: white;">&#xe5c8;</i></div></a>

            <a href="https://www.tutorialspoint.com/html/html_tutorial.pdf" download><div class="class-notes"><img src="images/notes-html.png" alt="" srcset="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px;color: white;">&#xe5c8;</i></div></a>

            <a href="https://www.tutorialspoint.com/css/css_tutorial.pdf" download><div class="class-notes"><img src="images/notes-css.png" alt="" srcset="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px;color: white;">&#xe5c8;</i></div></a>

            <a href="https://dl.ebooksworld.ir/books/Beginning.ReactJS.Foundations.Chris.Minnick.Wiley.9781119685548.EBooksWorld.ir.pdf" download><div class="class-notes"><img src="images/notes-ractjs.png" alt="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px;color: white;">&#xe5c8;</i></div></a>

        </div>
        <div class="first-row">
            <a href="https://www.tutorialspoint.com/javascript/javascript_tutorial.pdf" download><div class="class-notes"><img src="images/notes-js.png" alt="" srcset="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px; color: white;">&#xe5c8;</i></div></a>

            <a href="https://www.tutorialspoint.com/html/html_tutorial.pdf" download><div class="class-notes"><img src="images/notes-html.png" alt="" srcset="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px;color: white;">&#xe5c8;</i></div></a>

            <a href="https://www.tutorialspoint.com/css/css_tutorial.pdf" download><div class="class-notes"><img src="images/notes-css.png" alt="" srcset="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px;color: white;">&#xe5c8;</i></div></a>

            <a href="https://dl.ebooksworld.ir/books/Beginning.ReactJS.Foundations.Chris.Minnick.Wiley.9781119685548.EBooksWorld.ir.pdf" download><div class="class-notes"><img src="images/notes-ractjs.png" alt="" id="notes-class-note-image">
            <i class="material-icons" style="margin-top: -190px;display: flex;margin-left: 260px;color: white;">&#xe5c8;</i></div></a>

        </div>
    </div>
        <div class="extra"></div>
    </div>
    
    <script src="script.js"></script>
</body>
</html>