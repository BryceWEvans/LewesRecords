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
<link rel="stylesheet" type="text/css" href="theme.css">
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="jquery.leanModal.min.js"></script>
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

	
	<p>   contact us </p>
</div>

<div class="heading"> 
 <h1> Fill out the form below: </h1> </div>
<div class="body">
 <p>dolor sit amet, consectetur adipiscing elit. Nullam facilisis nisi at mi efficitur, id iaculis tellus dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed blandit tellus in arcu tristique luctus. Ut quis sem in tortor facilisis placerat sit amet eget enim. Nulla vehicula venenatis diam, gravida fermentum tortor tincidunt vel. Maecenas eleifend fringilla orci, vehicula aliquet ipsum elementum sed. Fusce congue diam in congue ultrices. Sed vitae faucibus odio, consectetur cursus magna. Vivamus euismod blandit mauris sed tincidunt. Nunc imperdiet viverra mi, nec rutrum ipsum egestas eget. Aliquam erat volutpat. Phasellus eget maximus nulla. In porttitor, massa vitae bibendum pretium, dolor elit blandit nisi, nec sollicitudin massa dui quis ligula. Etiam ac metus efficitur sem sodales varius in eget enim. </p>
	
</div>
<div class="footer";>
</div>

</body>
</HTML>