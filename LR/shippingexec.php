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

$uname =$_POST['uname'];
$city =$_POST['city'];
$state =$_POST['state'];
$address =$_POST['address'];
$zipcode =$_POST['zipcode'];
$infoqry = "INSERT INTO info (username, city, state, address, zipcode) VALUES ('$username','$city','$state', '$address', '$zipcode')";
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
header("location:shipped.php");
exit();
?>