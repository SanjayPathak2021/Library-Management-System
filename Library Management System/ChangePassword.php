<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
<body>
	
		<nav class=" navbar navbar-expand-lg  navbar-dark bg-dark">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="user_dashboard.php" class="navbar-brand" style="font-size: 50px"> Library Management System</a>
				</div>
				<span>
					<strong>
						<font  style="color:white">Welcome :  <?php echo $_SESSION['name'];?>
				</font></strong></span>

				<span>
					<strong>
						<font style="color: white" ">Email :  <?php echo $_SESSION['email'];?>
				</font></strong></span>
				<ul class="nav navbar-nav navbar-right" style="font-size: 20px">
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

			<span> <marquee> This is the Libraray Management System .It opens at 8:00 Am and closes at 5:00 PM</marquee>
			 </span>
		</h1>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 bg-dark text-white" style=" border-radius: 30px; margin-top: 50px">
				
            <form  action="UpdatePassword.php " method="POST" style="font-size: 20px">
            	<legend class="bg-dark text-white text-center " style="margin-top: 50px; border-bottom: 10px solid blue;font-size: 50px;font-style: italic;color: magenta">  Change User Password</legend>
            	<div class="form-group">

            	<label> Old Password:</label>
            	<input type="password" name="oldPassword" class="form-control" focused >
            	</div>

            	<div class="form-group">
            	<label> New Password:</label>
            	<input type="password" name="newPassword" class="form-control" focused>
            	</div>
            	<br>
            	<button type="submit" class="btn btn-primary" name="update" style="margin-bottom: 50px;font-size: 30px">Update Password </button>
            	<center></center>
            </form>


			</div>
			<div class="col-md-4"></div>

		</div>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>