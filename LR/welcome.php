<?php
// Start the session
session_start();
?>

<?php
//set var
$username = $password = "";
$usernameerr = $passworderr = ""; 
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
	<img src="Images/logo.png" class="logo"/>
	<!-- login button -->
	<div class="login">
		<a id="modal_trigger" href="#modal">
			<img src="Images/login.png" height="100px" width="100px"/>
		</a>
	</div>
	<!-- pop-up login box -->
	<div id="modal" class="popupContainer" style="display:none;">
		<!-- header -->
		<header class="popupHeader">
			<span class="header_title"> Login
			</span>
			<span class="modal_close"><i class="fa fa-times"></i>
			</span>
		</header>
		<!-- body -->		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i>
						</span>
						<span class="icon_title">like us on Facebook
						</span>						
					</a>
					<a href="#" class="social_box twitter">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">follow us on twitter</span>
					</a>
				</div>
				<div class="action_btns">
					<div class="one_half">
						<a href="#" id="login_form" class="btn">Login
						</a>
					</div>
					<div class="one_half last">
						<a href="#" id="register_form" class="btn">Sign up
						</a>
					</div>
				</div>
			</div>
			<!-- Username & Password Login form -->
			<div class="user_login">
				<form action="welcome.php" method="post">
					<label>Email / Username</label>
					<input type="text" name="username" value="<?php echo $username;?>" required/>
					<br />

					<label>Password</label>
					<input type="password" name="password" value="<?php echo $password;?>" required/>
					<br />

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><input type="submit" name="submit" value="submit" class="btn btn_red"><a href="welcome.php" class="btn btn_red">
							Login</a></div>
					</div>
				</form>

				
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form>
					<label>Full Name</label>
					<input type="text" />
					<br />

					<label>Email Address</label>
					<input type="email" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>

<!--end pop out box-->


<div class="front">

	<div class="side">
		<a href="home.html">
			<div class="homeb"/>			
			</div>	
		</a>
</br>
		<a href="contact.html">
			<div class="contactb"/>
			</div>
		</a>
	</div>
</div>

<div class="welcome">

	
	<p>   welcome <?php echo "$username" ?></p>
</div>

<div class="heading"> 
 <h1> New Releases: </h1> </div>
<div class="body">
 <p>dolor sit amet, consectetur adipiscing elit. Nullam facilisis nisi at mi efficitur, id iaculis tellus dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed blandit tellus in arcu tristique luctus. Ut quis sem in tortor facilisis placerat sit amet eget enim. Nulla vehicula venenatis diam, gravida fermentum tortor tincidunt vel. Maecenas eleifend fringilla orci, vehicula aliquet ipsum elementum sed. Fusce congue diam in congue ultrices. Sed vitae faucibus odio, consectetur cursus magna. Vivamus euismod blandit mauris sed tincidunt. Nunc imperdiet viverra mi, nec rutrum ipsum egestas eget. Aliquam erat volutpat. Phasellus eget maximus nulla. In porttitor, massa vitae bibendum pretium, dolor elit blandit nisi, nec sollicitudin massa dui quis ligula. Etiam ac metus efficitur sem sodales varius in eget enim. </p>
	
</div>
<div class="footer";>
</div>

</body>
</HTML>