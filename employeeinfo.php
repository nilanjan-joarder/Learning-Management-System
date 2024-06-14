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
        <img src="images/iconoir_home.png" alt="" srcset="" class="nav-icons">
        <a href="admin.php" style="text-decoration: none;">
            <p>Dashboard</p>
        </a>

        
            <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons" >
            <a href="studentinfo.php" style="text-decoration: none;">
                <p >Student Info</p>
            </a>
        
        <div style="border-bottom:2px solid white; width:fit-content; margin-left:20px; padding-bottom:10px;" ;>
        <img src="images/icon-park-outline_retro-bag.png" alt="" srcset="" class="nav-icons" id="dashboard-icon">
        <a href="employeeinfo.php" style="text-decoration: none;">
            <p class="nav-bar-notes" style="margin-left:40px">Employee Info</p>
        </a>
       
    </div>
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
           

        <form class="" action="employeeconnect.php" method="post" autocomplete="off">
            <p id="register-employee-title" > Register Employee</p><br>
            <label for="fullname">Name </label><br>
            <input type="text" name="fullname" id = "fullname" required value=""> <br>
            <label for="email">Email ID</label><br>
            <input type="email" name="email" id = "email" required value=""> <br>
            <label for="phonenumber">Mobile Number</label><br>
            <input type="tel" name="phonenumber" id = "phonenumber" required value=""> <br>
            <label for="phonenumber">Employee ID</label><br>
            <input type="text" name="random_code" id="random_code" require value="">
            <button type="button" onclick="generateRandomCode()">Generate ID</button><br>
            <button type="submit" name="submit">Register</button>            
            </form>

            <h1 id="title">Employee Informations</h1>
            <table>
    <tr>
        <th>Serial No.</th>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Employee Email Id</th>
        <th>Employee Mobile Number</th>
    </tr>
    <?php
$conn = mysqli_connect("localhost", "root", "", "reglog");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, random_code, fullname, email, phonenumber FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["random_code"] . "</td><td>". $row["fullname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phonenumber"] . "</td></tr>";
    }
    echo "</table>";
} 
$conn->close();
?>


  </table>
    </div>
    <script>
    // JavaScript function to generate a random code
    function generateRandomCode() {
        // Generate a random integer between 1000 and 9999
        var randomCode;
        do {
            randomCode = Math.floor(1000 + Math.random() * 9000);
        } while (randomCodeExists(randomCode));

        // Set the value of the random code input field to the generated random code
        document.getElementById("random_code").value = randomCode;
    }

    // Function to check if a random code already exists
    function randomCodeExists(code) {
        // Get all elements with the name "random_code"
        var codeInputs = document.getElementsByName("random_code");
        
        // Check if any input field already has the same value as the generated code
        for (var i = 0; i < codeInputs.length; i++) {
            if (codeInputs[i].value == code) {
                return true; // Code already exists
            }
        }
        return false; // Code doesn't exist
    }
</script>
    <script src="script.js"></script>
</body>
</html>