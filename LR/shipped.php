<?php
// Start the session
session_start();
?>
<?php
require 'auth.php';
include 'sessions.php';
 ?>

<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="theme2.css">
</head>
<body>

<div class="header"> 
	<img src="logo.png" class="logo"/>
	<!-- logout button -->
	<div class="login">
		
			<a href="home.php"><img src="logout.png" height="100px" width="100px"/></a>
		
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

	<p> Your order is being processed! </p>
	<a href="home.php"><p> log out! </p> </a>
</div>
</body>
</HTML>
