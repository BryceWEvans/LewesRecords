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
		<a href="home.php">
			<img src="logout.png" height="100px" width="100px"/>
		</a>
	</div>
</div>

<div class="front">

	<div class="side">
		<a href="home.php">
			<div class="homeb"/>			
			</div>	
		</a>
</br>
		<a href="contact.html">
			<div class="contactb"/>
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

foreach($MyAlbums as $mywish){


$Total=$Total+$Price;

echo $mywish;

echo "<br>";

                }

echo "<br>";

echo "Your Total is $";

echo $Total;

?>

<a href="selection.php"> <h1> No! Go back!</h1> </a>
</div>
</div>
</body>
</HTML>
