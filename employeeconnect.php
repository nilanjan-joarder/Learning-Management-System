<?php
$fullname= $_POST['fullname'];
$email= $_POST['email'];
$phonenumber= $_POST['phonenumber'];
$random_code=$_POST['random_code'];

$conn= new mysqli('localhost', 'root', '', 'reglog');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}

    else{
        $stmt = $conn->prepare("insert into employees (fullname, email, phonenumber, random_code)
        values(?, ?, ?,?)");
        $stmt->bind_param("ssii", $fullname, $email,$phonenumber,$random_code);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close();
        $conn->close();
        }
        header("Location: employeeinfo.php");
        exit();

?>

