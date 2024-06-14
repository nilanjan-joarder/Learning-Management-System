<?php 
if(session_status() == PHP_SESSION_NONE) {
    // Start the session
    session_start();
}
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'reglog';

$conn = mysqli_connect($servername, $username, $password, $database);

?>