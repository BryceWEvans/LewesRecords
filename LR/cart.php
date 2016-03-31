<?php
// Start the session
session_start();
?>
<?php
require 'auth.php';
include 'sessions.php';


//get back from session
if (isset($_SESSION['albums'])){
    $albums = $_SESSION['albums'];
}
?>
<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="theme2.css">
</head>
<body>

<!-- header w/ logo+login -->
<div class="header"> 
	<img src="logo.png" class="logo"/>
	<!-- login button -->
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
<div class="notif">
<?php

$Total=0;

$Price=10;

$MyAlbums=$_POST['albums'];
$_SESSION['MyAlbums']= $MyAlbums;

foreach($MyAlbums as $mywish){


$Total=$Total+$Price;

echo $mywish;

echo "<br>";   }          

echo "<br>";

echo "Your Total is $";

echo $Total;

echo $username;

if ($Total == 0) {
	echo "</br>";
	echo "</br>";
	echo '<h1><a href="selection.php">Go select some albums!</a></h1>';
} else {
	echo "</br>";
	echo "</br>";
	echo '<h1><a href="selection.php"> No! Go Back! </a></h1>';
}
?>

 <h1> <a href="shipping.php"> ship it to me! </a> </h1>
</div>
</div>
</body>
</HTML>
