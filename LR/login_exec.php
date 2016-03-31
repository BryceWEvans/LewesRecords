<?php
	session_start();
ob_start();

$servername = "localhost:8889";
$username = "username";
$password = "password";
$database = "lewesrecords";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
} 
echo "Connected successfully";

 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;

    // POST values
    $username = $_POST['username'];
    $password = $_POST['password'];

    //sanitize
    $username = stripslashes($username);
    $password = stripslashes($username);

 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: home.php");
		exit();
	}


 
	//Create query
	$qry= "SELECT * FROM user WHERE username= '$username' AND password= '$password'";
	$result= mysqli_query($conn, $qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_PASSWORD'] = $member['password'];
			session_write_close();
			header("location: homelogged.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: home.php");
				exit();
			}
		}
	}else {
		die("Query failed");
 
	}
?>