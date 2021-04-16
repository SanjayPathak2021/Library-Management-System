<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>User DashBoard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">
	#side_bar{
		background-color: whitesmoke;
		padding:  15px;
		width: 200px;
		height: 300px
	}
</style>
</head>
<body style="background-color: forestgreen">
	
		<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="user_dashboard.php" class="navbar-brand " style="font-size: 30px;"> Library Management System</a>
				</div>
				<span>
					<strong>
						<font  style="color:white">Welcome :  <?php echo $_SESSION['name'];?>
				</font></strong></span>

				<span>
					<strong>
						<font style="color: white" ">Email :  <?php echo $_SESSION['email'];?>
				</font></strong></span>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a href="ViewProfile.php" class="nav-link">View Profile</a>

					</li>
					<li class="nav-item">
							<a href="EditProfile.php" class="nav-link">Edit Profile</a>

					</li>

						<li class="nav-item">
					<a href="ChangePassword.php" class="nav-link">Change Password</a>

					</li>
					<li class="nav-item">
						<a href="LogOut.php" class="nav-link">LogOut</a>
					</li>
				</ul>
			</div>
		</nav>

		<br>
		<h1>

			<span> <marquee> <h1>This is the Libraray Management System .It opens at 8:00 Am and closes at 5:00 PM</h1></marquee>
			 </span>
		</h1>
		<div class="row">
			
		</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>