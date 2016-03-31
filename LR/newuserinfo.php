<?php
ob_start();
session_start();
include 'sessions.php';
?>

<?php
$servername = "localhost:8889";
$username = "username";
$password = "password";
$database = "lewesrecords";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$username =$_POST['uname'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$favm =$_POST['favm'];
$favc =$_POST['favc'];

//sanitize
$username = stripslashes($username);
$fname = stripslashes($fname);
$lname = stripslashes($lname);
$favm = stripslashes($favm);
$favc = stripslashes($favc);
$infoqry = "INSERT INTO info (username, firstname, lastname, favmusic, favcolor) VALUES ('$uname','$fname','$lname', '$favm', '$favc')";
$result= mysqli_query($conn, $infoqry);
?>

<?php if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
echo "Connected successfully";
}
    if($result){
    echo"successfully inserted";
} else {
 echo "failed";
}
?>

<?php
header("location:homelogged.php");
exit();
?>