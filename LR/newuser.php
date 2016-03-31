<?php
	ob_start();
session_start();

include 'sessions.php';
require 'auth.php';
 ?>

<?php
$servername = "localhost:8889";
$username = "username";
$password = "password";
$database = "lewesrecords";
// Create connection
$newusername =$_POST['newusername'];
$newpassword =$_POST['newpassword'];
$qry = "INSERT INTO user (username, password) VALUES ('$newusername','$newpassword')";
$conn = new mysqli($servername, $username, $password, $database);
$result= mysqli_query($conn, $qry);


// Check connection
if ($conn->connect_error) {
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



<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="theme.css">
<script type="text/javascript" src="jquery-1.11.0.min.js">
</script>
<script type="text/javascript" src="jquery.leanModal.min.js">
</script>
</head>
<body>

<div class="header"> 
	<img src="logo.png" class="logo"/>
	<!-- logout button -->
	<div class="login">
		
			<a href="out.php"><img src="logout.png" height="100px" width="100px"/></a>
		
	</div>
</div>
<div class="front">

	<div class="side">
		<a href="homelogged.php">
			<div class="homeb"/>			
			</div>	
		</a>
</br>
		<a href="contactlogged.php">
			<div class="contactb"/>
			</div>
		</a>

		<a href="userinfo.php">
			<div class="userinfo"/>
			</div>
		</a>

		<a href="selection.php">
			<div class="albumsb"/>
			</div>
		</a>

		<a href="cart.php">
			<div class="cartb"/>
			</div>
		</a>

		
	</div>
</div>

<div class="welcome">
	
	<p>   welcome </p>
</div>

<div class="heading"> 
 <h1> Enter your personal information: </h1> </div>
<div class="body">
 <p><form method="post" action="newuserinfo.php">
  <label> User name: </label>
<input type="text" name="uname"  />
</br></br>
 <label> First name: </label>
<input type="text" name="fname"  />
</br></br>
 <label> Last name: </label>
<input type="text" name="lname"  />
</br></br>
 <label> Favorite music: </label>
<input type="text" name="favm"  />
</br></br>
 <label> Favorite color: </label>
<input type="text" name="favc"  />
</br></br>
<input type="submit" name="submit" value="submit" />
</p>	
</form>
</div>
<div class="footer";>
</div>

</body>
</HTML>