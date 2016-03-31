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
<p><form method="post" action="shippingexec.php">
  <label> User name: </label>
<input type="text" name="uname"  />
</br></br>
 <label> Address: </label>
<input type="text" name="address"  />
</br></br>
 <label> City: </label>
<input type="text" name="city"  />
</br></br>
 <label> State: </label>
<input type="text" name="state"  />
</br></br>
 <label> Zipcode: </label>
<input type="text" name="zipcode"  />
</br></br>
<input type="submit" name="submit" value="submit" />
</p>	
</form>
</div>
</div>
</body>
</HTML>