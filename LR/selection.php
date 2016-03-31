<?php
// Start the session
session_start();
?>
<?php
require 'auth.php';
include 'sessions.php';
 ?>

 <?php
session_start();
//set initial value
$albums[] = "";
//get value from post data and store into session
if (isset($_POST['albums[]'])){
    $_SESSION['albums[]'] = $_POST['albums[]'];
}
//get back from session
if (isset($_SESSION['albums[]'])){
    $albums[] = $_SESSION['albums[]'];
}
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

	albums[]

	<form action="cart.php" method="POST">
	<table width="400px">
	<tr>
		<td>
			<p> Pink Floyd "Dark Side of the Moon" -$10 </p> 
			<img href="Images/pfalbum.png" height="200px" width="200px"/>
			<input type="checkbox" name="albums[]" value="Pink Floyd- Dark Side of the Moon" />
		</td>
		<td>
			<p> Led Zepplin "Mothership" -$10 </p> 
			<img href="Images/lzalbum.png" height="200px" width="200px"/>
			<input type="checkbox" name="albums[]" value="Led Zepplin- Mothership" />
		</td>
		<td>
			<p> Oasis "Don't Believe the Truth" -$10 </p> 
			<img href="Images/oaalbum.png" height="200px" width="200px"/>
			<input type="checkbox" name="albums[]" value="Oasis- Don't Believe the Truth" />
		</td>
		<td>
			<p> Pink Floyd "Dark side of the moon" -$10 </p> 
			<img href="Images/pfalbum.png" height="200px" width="200px"/>
			<input type="checkbox" name="albums[]" value="Pink Floyd- Dark Side of the Moon" />
		</td>
	</tr>
	</table>
		<input type="submit" name="submit"/>
	</form>
</div>
</body>
</HTML>
