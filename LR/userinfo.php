
<?php
// Start the session
session_start();
?>
<?php
include 'sessions.php';
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
		<a href="home.php">
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

	
	<p>   Hello </p>
</div>

<div class="heading"> 
 <h1> Your info: </h1> </div>
<div class="body">
 <p><?php 
	//Include database connection details
	Include('connection.php');

	$qry= "SELECT * FROM info WHERE username= '$username'";
	$result= mysqli_query($conn, $qry);


//make table
echo "<table border='1'>
<tr>
<th>First name</th>
<th>Last name</th>
<th>favorite music</th>
<th>favorite color</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {

  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['favmusic'] . "</td>";
  echo "<td>" . $row['favcolor'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

?> </p>
	
</div>
<div class="footer";>
</div>

</body>
</HTML>